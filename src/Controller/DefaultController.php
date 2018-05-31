<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Faq;

class DefaultController extends AbstractController
{
    /**
     * Only for dev purposes. In prod environment
     * it must be overritten by server
     * @Route("/", name="index")
     */
    public function index() :RedirectResponse
    {
        return $this->redirect('/build/static/index.html');
    }

    /**
     * @return Response
     * @Route("/faq", name="faq")
     */
    public function faqAction() :Response
    {
        return $this->render('faq.html.twig', [
            'data' => (new Faq)->getData()
        ]);
    }
}