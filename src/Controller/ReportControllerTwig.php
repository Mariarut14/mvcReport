<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReportControllerTwig extends AbstractController
{
    #[Route("/", name: "me")]
    public function me(): Response
    {
        return $this->render('me.html.twig');
    }

    #[Route("/about", name: "about")]     
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }
}
