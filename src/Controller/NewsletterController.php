<?php

namespace App\Controller;

use App\Entity\Newsletter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\Serializer;
use SymfonyComponentHttpFoundationStreamedResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class NewsletterController extends AbstractController
{
    /**
     * @param Request $request
     * @param ValidatorInterface $validator
     * @Route("/newsletter/join", name="joinNewsletter")
     * @return Response
     */
    public function joinNewsletter(Request $request, ValidatorInterface $validator) :Response
    {

        $email = json_decode($request->getContent(), true)['email'];

        $emailConstraint = new Assert\Email();

        $errors = $validator->validate($email, $emailConstraint);

        if (0 === count($errors) && $email != null)
        {
            $existEmail = $this->getDoctrine()
                ->getRepository('App:Newsletter')
                ->findBy(['email' => $email]);

            if(empty($existEmail))
            {
                $em = $this->getDoctrine()->getManager();
                $newsletter = new Newsletter($email, 1);
                $em->persist($newsletter);
                $em->flush();

                $response = new Response(json_encode([
                    'status' => 'success',
                    'message' => 'Thanks for your subscription!<br>'.
                        'You’ll receive our news and important announcements in your email.<br>'.
                        'Have a great day'
                ]));
            }
            else
            {
                if ($existEmail[0]->getEnabled() == false)
                {
                    $newsletterId = $existEmail[0]->getId();
                    $em = $this->getDoctrine()->getManager();
                    $newsletter = new Newsletter($email, 1);
                    $newsletter->setId($newsletterId);
                    $em->merge($newsletter);
                    $em->flush();

                    $response = new Response(json_encode([
                        'status' => 'success',
                        'message' => 'Thanks for Re-subscription!'
                    ]));
                }
                else
                {
                    $response = new Response(json_encode([
                        'status' => 'error',
                        'message' => 'You are already subscribed!'
                    ]));
                }
            }
        }
        else
        {
            $response = new Response(json_encode([
                'status' => 'error',
                'message' => 'Invalid email address!'
            ]));
        }

        return $response;

    }


    /**
     * @return Response
     * @Route("/admin/newsletter", name="newsletterAdmin")
     */
    public function newsletterAdmin() :Response
    {
        $newsletters = array_slice($this->getAllNewsletters(), 0, 10, true);

        return $this->render('newsletter_admin.html.twig', [
            'newsletters' => $newsletters
        ]);
    }

    /**
     * @param int $id
     * @Route("/admin/newsletter/enable/{id}", name="enableNewsletter")
     * @return Response
     */
    public function enable(int $id) :Response
    {
        $newsletter = $this->getDoctrine()
            ->getRepository('App:Newsletter')->find($id);

        if ($newsletter == null)
        {
            return $this->redirect('/admin/newsletter');
        }

        $newsletter->setEnabled(true);
        $em = $this->getDoctrine()->getManager();
        $em->merge($newsletter);
        $em->flush();

        return $this->redirect('/admin/newsletter');
    }

    /**
     * @param int $id
     * @Route("/admin/newsletter/disable/{id}", name="disableNewsletter")
     * @return Response
     */
    public function disable(int $id) :Response
    {
        $newsletter = $this->getDoctrine()
            ->getRepository('App:Newsletter')->find($id);

        if ($newsletter == null)
        {
            return $this->redirect('/admin/newsletter');
        }

        $newsletter->setEnabled(false);
        $em = $this->getDoctrine()->getManager();
        $em->merge($newsletter);
        $em->flush();

        return $this->redirect('/admin/newsletter');
    }

    /**
     * @param int $id
     * @Route("/admin/newsletter/delete/{id}", name="deleteNewsletter")
     * @return Response
     */
    public function delete(int $id) :Response
    {
        $newsletter = $this->getDoctrine()
            ->getRepository('App:Newsletter')->find($id);

        if ($newsletter == null)
        {
            return $this->redirect('/admin/newsletter');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($newsletter);
        $em->flush();

        return $this->redirect('/admin/newsletter');
    }

    /**
     * @param string $email
     * @Route("/admin/newsletter/search/{email}", name="searchNewsletter")
     * @return JsonResponse
     */
    public function search(string $email) :JsonResponse
    {
        $newsletter = $this->getDoctrine()
            ->getRepository('App:Newsletter')->findBy(['email' => $email]);

        if ($newsletter == null)
        {
            return new JsonResponse(['status' => 'error']);
        }

        $newsletter = $newsletter[0];

        return new JsonResponse([
            'status' => 'ok',
            'id' => $newsletter->getId(),
            'email' => $newsletter->getEmail(),
            'enabled' => $newsletter->getEnabled(),
            'created' => $newsletter->getCreated()
        ]);
    }

    /**
     * @Route("/admin/newsletter/get/all", name="getAllNewsletters")
     * @return JsonResponse
     */
    public function getAllNewslettersJson() :JsonResponse
    {
        $result = [];

        foreach ($this->getAllNewsletters() as $newsletter)
            $result[] = [
                'id' => $newsletter->getId(),
                'email' => $newsletter->getEmail(),
                'enabled' => $newsletter->getEnabled(),
                'created' => $newsletter->getCreated()
            ];

        return new JsonResponse($result);
    }

    /**
     * @Route("/admin/newsletter/export/all", name="exportAllNewsletter")
     * @return StreamedResponse
     */
    public function exportAll() :StreamedResponse
    {
        $newsletters = $this->getAllNewsletters();
        $callback = function() use ($newsletters)
        {
            $handle = fopen('php://output', 'w+');
            foreach ($newsletters as $newsletter)
                fputcsv($handle,[$newsletter->getEmail()],';');

            fclose($handle);
        };
        $response = new StreamedResponse();
        $response->setCallback($callback);
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-Disposition',
            'attachment; filename="export_newsletter_emails_'.date('m-d-Y').'.csv"');

        return $response;
    }

    /**
     * @Route("/admin/newsletter/export/enabled", name="exportEnabledNewsletter")
     * @return StreamedResponse
     */
    public function exportEnabled() :StreamedResponse
    {
        $newsletters = $this->getEnabledNewsletters();
        $callback = function() use ($newsletters)
        {
            $handle = fopen('php://output', 'w+');
            foreach ($newsletters as $newsletter)
                fputcsv($handle,[$newsletter->getEmail()],';');

            fclose($handle);
        };
        $response = new StreamedResponse();
        $response->setCallback($callback);
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-Disposition',
            'attachment; filename="export_newsletter_emails_'.date('m-d-Y').'_enabled_only.csv"');

        return $response;
    }

    /**
     * @Route("/admin/newsletter/export/disabled", name="exportDisabledNewsletter")
     * @return StreamedResponse
     */
    public function exportDisabled() :StreamedResponse
    {
        $newsletters = $this->getDisabledNewsletters();
        $callback = function() use ($newsletters)
        {
            $handle = fopen('php://output', 'w+');
            foreach ($newsletters as $newsletter)
                fputcsv($handle,[$newsletter->getEmail()],';');

            fclose($handle);
        };
        $response = new StreamedResponse();
        $response->setCallback($callback);
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-Disposition',
            'attachment; filename="export_newsletter_emails_'.date('m-d-Y').'_disabled_only.csv"');

        return $response;
    }

    private function getAllNewsletters() :array
    {
        $newsletters = $this->getDoctrine()
            ->getRepository('App:Newsletter')->findBy([], ['created_at' => 'DESC']);
        return $newsletters;
    }

    private function getEnabledNewsletters() :array
    {
        $newsletters = $this->getDoctrine()
            ->getRepository('App:Newsletter')->findBy(
                ['enabled' => 1],
                ['created_at' => 'DESC']
            );
        return $newsletters;
    }

    private function getDisabledNewsletters() :array
    {
        $newsletters = $this->getDoctrine()
            ->getRepository('App:Newsletter')->findBy(
                ['enabled' => 0],
                ['created_at' => 'DESC']
            );
        return $newsletters;
    }
}