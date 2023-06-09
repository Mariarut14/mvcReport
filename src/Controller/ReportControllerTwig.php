<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ReportControllerTwig extends AbstractController
{
    #[Route("/", name: "me")]
    public function myself(): Response
    {
        return $this->render('me.html.twig');
    }

    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }

    #[Route("/lucky", name: "lucky")]    public function number(): Response
    {
        $number = random_int(1, 10);

        return $this->render('lucky.html.twig', [
            'number' => $number,
        ]);
    }
    #[Route("/api/quote")]
    public function quote(): Response
    {
        $quotes = array("It is during our darkest moments that we must focus to see the light. -Aristotle",
        "If you really look closely, most overnight successes took a long time. -Steve Jobs",
        "If you look at what you have in life, you'll always have more. If you look at what you don't have in life, you'll never have enough. -Oprah Winfrey");

        $quote = $quotes[random_int(0, 2)];
        $now = date("Y-m-d H:i:s");
        $data = [
            'message' => 'Welcome to the quote API. Here is your qoute:',
            'quote' => $quote,
            'now' => $now
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions($response->getEncodingOptions() | JSON_PRETTY_PRINT);
        return $response;
    }
    #[Route("/metrics", name: "metrics")]
    public function metrics(): Response
    {
        return $this->render('metrics.html.twig');
    }

    #[Route('/proj/about', name: 'project_about')]
    public function aboutProject(): Response
    {
        return $this->render('adventure/about.html.twig');
    }

    #[Route('/proj/about/database', name: 'project_about_database')]
    public function aboutDatabase(): Response
    {
        return $this->render('adventure/about-database.html.twig');
    }


}
