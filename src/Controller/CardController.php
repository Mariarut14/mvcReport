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
        $cardDeck = $cardDeck->makeDeck();

        $data = [
            "cardDeck" => $cardDeck
        ];
        return $this->render('card/deck.html.twig', $data);
    }

    #[Route("/card/deck/shuffle", name: "card_deck_shuffle")]
    public function allCardsShuffle(
        SessionInterface $session
    ): Response
    {
        $session->clear();
        $cardDeck = [];
        $cardDeck = new DeckOfCards();
        $cardDeck = $cardDeck->makeDeck();
        
        shuffle($cardDeck);
        $data = [
            "cardDeck" => $cardDeck,
        ];
        return $this->render('card/deck.html.twig', $data);
    }

    #[Route("/card/deck/draw", name: "card_draw_init")]
    public function DrawOne(
        SessionInterface $session
    ): Response
    {
        if ($session->get("deck") == null) {
            $cardDeck = [];
            $cardDeck = new DeckOfCards();
            $cardDeck = $cardDeck->makeDeck();
            $session->set("deck", $cardDeck);
            $session->set("card_left", 52);
        }
        $deck = $session->get("deck");
        shuffle($deck);
        $card = array_splice($deck, 0, 1);

        $cardsLeft = count($deck);
        $session->set("card_left", $cardsLeft);
        $session->set("deck", $deck);
        
        $data = [
            "card_left"=>$cardsLeft,
            "card"=>$card[0],
        ];

        return $this->render('card/draw.html.twig', $data);
    }

    /*#[Route("/card/deck/draw", name: "card_draw_post", methods: ['POST'])]
    public function initDraw(
        SessionInterface $session
    ): Response
    {
        $numCard = 1;

        $hand = [];
        $deck = $session->get("deck");
        $hand = new Hand($deck, $numCard);

        $hand->draw();
        array_splice($this->deck, 0, $this->numCard);

        $cardsLeft = length($this->deck);
        $session->set("card_left", $cardsLeft);
        $session->set("deck", $deck);
        
        $data = [
            "hand"=>$hand,
            "number"=>$numCard,
            "card_left"=>$cardsLeft,
            "deck"=>$deck
        ];

        return $this->render('card/showOne.html.twig', $data);
    }

    #[Route("/card/deck/draw:{numCard<\d+>}", name: "card_draw_post", methods: ['POST'])]
    public function initDrawCallback(
        Request $request,
        SessionInterface $session
    ): Response
    {
        $numCard = $request->request->get('num_cards');

        $hand = [];
        $deck = $session->get("deck");
        $hand = new Hand($deck, $numCard);

        $hand->draw();
        array_splice($this->deck, 0, $this->numCard);

        $cardsLeft = length($this->deck);
        $session->set("card_left", $cardsLeft);
        $session->set("deck", $deck);
        
        $data = [
            "hand"=>$hand,
            "number"=>$numCard,
            "card_left"=>$cardsLeft,
            "deck"=>$deck
        ];

        return $this->render('card/show.html.twig', $data);
    }*/
}
