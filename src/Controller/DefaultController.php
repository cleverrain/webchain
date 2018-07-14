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
     */
    public function index() :RedirectResponse
    {
        return $this->redirect('/build/static/index.html');
    }

    /**
     * Redirect /home to /
     * @Route("/home", name="home")
     */
    public function home() :RedirectResponse
    {
        return $this->index();
    }

    /**
     * @Route("/start", name="start")
     */
    public function howToStartAction() :Response
    {
        return $this->render('how_to_start.html.twig');
    }
}