<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\DeckOfCards;
use App\Card\Hand;
use App\Card\HandGame;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class GameController extends AbstractController
{
    #[Route("/game/doc", name: "game_doc")]
    public function getDoc(): Response
    {
        return $this->render('game/doc.html.twig');
    }


    #[Route("/game", name: "game_init_get", methods: ['GET'])]
    public function initGame(
        SessionInterface $session
    ): Response {
        $session->clear();
        return $this->render('game/home.html.twig');
    }

    #[Route("/game", name: "game_init_post", methods: ['POST'])]
    public function initGameCallback(
        SessionInterface $session
    ): Response {
        $cardDeck = new DeckOfCards();
        $cardDeck->makeDeck();
        $cardDeck = $cardDeck->getDeck();
        shuffle($cardDeck);
        $session->set("deck", $cardDeck);
        $session->set("player", 0);
        $session->set("bank", 0);
        $session->set("wonPlayer", 0);
        $session->set("wonBank", 0);

        return $this->redirectToRoute('game_play_get');
    }

    #[Route("/game/play", name: "game_play_get", methods: ['GET'])]
    public function playGame(
        SessionInterface $session
    ): Response {
        $deck = $session->get("deck");
        if (count($deck) <= 10) {
            $this->addFlash(
                'lose',
                'There are too few cards left in the deck!
                Please start a new game.'
            );
            $data = [
                "hand"=>[],
                "player"=>0,
                "wonPlayer"=>$session->get("wonPlayer"),
                "wonBank"=>$session->get("wonBank"),
                "gameOver"=>true,
            ];

        } else {
            $hand = new HandGame($deck);
            for ($i = 1; $i <=2; $i++) {
                $hand->add(new CardGraphic());
            }
            $deck = $hand->setValue();
            $sum = $hand->sum();
            $propability = $hand->propability();
            $session->set("deck", $deck);
            $session->set("hand", $hand);
            $session->set("player", $sum);
            $hand = $hand->getAsString();
            $data = [
                "hand"=>$hand,
                "propability"=>$propability,
                "sum"=>$sum,
                "gameOver"=>false
            ];
        }
        return $this->render('game/play.html.twig', $data);

    }

    #[Route("/game/play", name: "game_play_post", methods: ['POST'])]
    public function newCard(
        SessionInterface $session
    ): Response {
        $gameOver = false;
        $deck = $session->get("deck");
        $hand = $session->get("hand");
        $deck = $hand->newCardInPlay($deck);
        $sum = $hand->sum();
        if ($sum > 21) {
            $this->addFlash(
                'lose',
                'You got more than 21 and you lost the round!'
            );
            $session->set("wonBank", $session->get("wonBank") + 1);
            $gameOver = true;
        }
        $propability = $hand->propability();
        $session->set("deck", $deck);
        $session->set("hand", $hand);
        $session->set("player", $sum);
        $handAsString = $hand->getAsString();
        $data = [
            "hand"=>$handAsString,
            "propability"=>$propability,
            "sum"=>$sum,
            "wonPlayer"=>$session->get("wonPlayer"),
            "wonBank"=>$session->get("wonBank"),
            "gameOver"=>$gameOver,
            "player"=>$session->get("player")
        ];

        return $this->render('game/play.html.twig', $data);

    }

    #[Route("/game/play/bank", name: "game_play_bank", methods: ['POST'])]
    public function playBank(
        SessionInterface $session
    ): Response {
        $deck = $session->get("deck");
        $hand = new HandGame($deck);
        for ($i = 1; $i <=2; $i++) {
            $hand->add(new CardGraphic());
        }
        $deck = $hand->setValue();
        $deck = $hand->bankPlay();
        $sum = $hand->sum();
        if  ($sum > 21) {
            $this->addFlash(
                'win',
                'The bank got more than 21 and you won the round!'
            );
            $session->set("wonPlayer", $session->get("wonPlayer") + 1);

        } elseif ($sum < $session->get("player")) {
            $this->addFlash(
                'win',
                'The bank got less sum than you and you won the round!'
            );
            $session->set("wonPlayer", $session->get("wonPlayer") + 1);
        } else {
            $this->addFlash(
                'lose',
                'The bank got the same or higher sum than you and you lost the round!'
            );
            $session->set("wonBank", $session->get("wonBank") + 1);

        }
        $session->set("deck", $deck);
        $session->set("bank", $sum);
        $handAsString = $hand->getAsString();
        $data = [
            "hand"=>$handAsString,
            "sum"=>$sum,
            "player"=>$session->get("player"),
            "wonPlayer"=>$session->get("wonPlayer"),
            "wonBank"=>$session->get("wonBank"),
            "gameOver"=>true
        ];

        return $this->render('game/play.html.twig', $data);
    }
}
