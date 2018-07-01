<?php

namespace App\Controller;

use Symfony\Bridge\Twig\Extension\AssetExtension;
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
     * @Route("/start", name="start")
     * @return Response
     */
    public function howToStartAction() :Response
    {
        return $this->render('how_to_start.html.twig');
    }
}