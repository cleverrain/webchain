<?php

namespace App\Controller;


use App\Entity\Newsletter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;



use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
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

        $email = $request->get('email');

        $emailConstraint = new Assert\Email();

        $errors = $validator->validate(
            $email,
            $emailConstraint
        );

        if (!$request->isMethod('POST'))
        {
            return $this->index();
        }

        if (0 === count($errors) && $email != null)
        {
            $existEmail = $this->getDoctrine()
                ->getRepository('App:Newsletter')
                ->findBy(['email' => $email]);

            if(empty($existEmail))
            {
                $this->addFlash('success','Thanks for your subscription!<br>'.
                    'You’ll receive our news and important announcements in your email.<br>'.
                    'Have a great day');

                $em = $this->getDoctrine()->getManager();
                $newsletter = new Newsletter($email, 1);
                $em->persist($newsletter);
                $em->flush();
            }
            else
            {
                if ($existEmail[0]->getEnabled() == false)
                {
                    $this->addFlash('success','Thanks for  Re-subscription!');

                    $newsletterId = $existEmail[0]->getId();
                    $em = $this->getDoctrine()->getManager();
                    $newsletter = new Newsletter($email, 1);
                    $newsletter->setId($newsletterId);
                    $em->merge($newsletter);
                    $em->flush();
                }
                else
                {
                    $this->addFlash('info','You are already subscribed!');
                }
            }
        }
        else
        {
            $this->addFlash('danger','Invalid email address!');
        }

        return $this->render('newsletter.html.twig');

    }

    /**
     * @return Response
     * @Route("/admin/newsletter", name="newsletterAdmin")
     */
    public function newsletterAdmin() :Response
    {
        $newsletters = $this->getDoctrine()
            ->getRepository('App:Newsletter')->findBy([], ['created_at' => 'DESC']);

        return $this->render('newsletter_admin.html.twig', [
            'newsletters' => $newsletters
        ]);
    }


    public function export()
    {
//        $serializer = new Serializer([new ObjectNormalizer()], [new CsvEncoder()]);
//
//        // instantiation, when using it inside the Symfony framework
//        $serializer = $container->get('serializer');
//
//        // encoding contents in CSV format
//        $serializer->encode($data, 'csv');
//
//        // decoding CSV contents
//        $data = $serializer->decode(file_get_contents('data.csv'), 'csv');
//
//
//        $data = [
//            'foo' => 'aaa',
//            'bar' => [
//                ['id' => 111, 1 => 'bbb'],
//                ['lorem' => 'ipsum'],
//            ]
//        ];
//
//        file_put_contents(
//            'data.csv',
//            $container->get('serializer')->encode($data, 'csv')
//        );
    }
}