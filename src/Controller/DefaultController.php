<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index() :RedirectResponse
    {
        return $this->redirect('/build/static/index.html');
    }

    public function howToStartAction() :Response
    {
        return $this->render('how_to_start.html.twig');
    }
}