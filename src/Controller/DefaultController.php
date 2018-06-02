<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Faq;
use Symfony\Component\Asset\Packages;

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
     * @param Packages $assetPackage
     * @return Response
     * @Route("/faq", name="faq")
     */
    public function faqAction(Packages $assetPackage) :Response
    {
        return $this->render('faq.html.twig', [
            'data' => (new Faq($assetPackage))->getData()
        ]);
    }

    /**
     * @Route("/start", name="start")
     */
    public function howToStartAction() :Response
    {
        return $this->render('how_to_start.html.twig');
    }
}