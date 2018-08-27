<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * Only for dev purposes. In prod environment
     * it must be overritten by server
     * @Route("/", name="index")
     * @Route("/home", name="home")
     */
    public function index() :RedirectResponse
    {
        return $this->redirect('/build/static/index.html');
    }

    /**
     * @return Response
     * @Route("/faq", name="faq")
     */
    public function faq() :Response
    {
        return $this->render('faq.html.twig');
    }

    /**
     * @Route("/start", name="start")
     */
    public function howToStart() :Response
    {
        return $this->render('how_to_mine.html.twig');
    }

    /**
     * @Route("/team", name="team")
     */
    public function team() :Response
    {
        return $this->render('team.html.twig');
    }
}