<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\DeckOfCards;
use App\Card\Hand;

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
        $cardDeck = [];
        $cardDeck = new DeckOfCards();
        $cardDeck->makeDeck();
        $cardDeck = $cardDeck->getString();

        $data = [
            "cardDeck" => $cardDeck
        ];
        return $this->render('card/deck.html.twig', $data);
    }

    #[Route("/card/deck/shuffle", name: "card_deck_shuffle")]
    public function allCardsShuffle(
        SessionInterface $session
    ): Response {
        $session->clear();
        $cardDeck = [];
        $cardDeck = new DeckOfCards();
        $cardDeck->makeDeck();
        $cardDeck = $cardDeck->getString();
        shuffle($cardDeck);
        $data = [
            "cardDeck" => $cardDeck,
        ];
        return $this->render('card/deck.html.twig', $data);
    }

    #[Route("/card/deck/draw", name: "card_deck_draw")]
    public function drawOne(
        SessionInterface $session
    ): Response {
        if (empty($session->get("deck"))) {
            $cardDeck = [];
            $cardDeck = new DeckOfCards();
            $cardDeck->makeDeck();
            $cardDeck = $cardDeck->getDeck();
            $session->set("deck", $cardDeck);
        }

        $deck = $session->get("deck");
        shuffle($deck);
        $card = array_splice($deck, 0, 1)[0];
        $card=$card->getAsString();
        $cardsLeft = count($deck);
        $session->set("card_left", $cardsLeft);
        $session->set("deck", $deck);

        $data = [
            "card_left"=>$cardsLeft,
            "card"=>$card,
        ];

        return $this->render('card/draw.html.twig', $data);
    }

    #[Route("/card/deck/draw/{num<\d+>}", name: "card_draw_hand")]
    public function drawHand(
        int $num,
        SessionInterface $session
    ): Response {
        $numCard = $num;

        if (empty($session->get("deck"))) {
            $cardDeck = [];
            $cardDeck = new DeckOfCards();
            $cardDeck->makeDeck();
            $cardDeck = $cardDeck->getDeck();
            $session->set("deck", $cardDeck);
        }

        $deck = $session->get("deck");
        $hand = new Hand($deck);
        for ($i=1; $i<=$numCard; $i++) {
            $hand->add(new cardGraphic());
        }
        $deck = $hand->setValue();
        $hand = $hand->getAsString();

        $cardsLeft = count($deck);
        $session->set("card_left", $cardsLeft);
        $session->set("deck", $deck);

        $data = [
            "hand"=>$hand,
            "number"=>$numCard,
            "card_left"=>$cardsLeft,
        ];

        return $this->render('card/show.html.twig', $data);
    }
}
