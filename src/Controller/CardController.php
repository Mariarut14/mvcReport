<?php

namespace App\Controller;

use App\Card\Card;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CardController extends AbstractController
{
    #[Route("/card", name: "card")]
    public function home(): Response
    {
        return $this->render('card/home.html.twig');
    }

    #[Route("/card/deck", name: "card_deck")]
    public function allCards(): Response
    {
        $card = new Card();

        $data = [
            "card" => $card->draw(),
            "cardString" => $card->getAsString(),
        ];
        return $this->render('card/deck.html.twig', $data);
    }
}