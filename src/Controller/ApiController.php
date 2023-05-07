<?php

namespace App\Controller;

use App\Controller\Card\Card;
use App\Controller\Card\CardGraphic;
use App\Controller\Card\DeckOfCards;
use App\Controller\Card\Hand;
use App\Entity\Library;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\LibraryRepository;

class ApiController extends AbstractController
{
    #[Route("/api", name:"api")]
    public function api(): Response
    {
        return $this->render('api/home.html.twig');
    }


#[Route("/api/quote", name:"quote")]

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

    #[Route("/api/deck", name: "json_deck") ]
    public function allCards(): Response
    {
        $cardDeck = [];
        $cardDeck = new DeckOfCards();
        $cardDeck->makeDeck();
        $cardDeck = $cardDeck->getString();

        $data = [
            "cardDeck" => $cardDeck
        ];
        $response = new JsonResponse($data);
        $response->setEncodingOptions($response->getEncodingOptions() | JSON_PRETTY_PRINT);
        return $response;
    }

    #[Route("/api/deck/shuffle", name: "json_shuffle")]
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
        $response = new JsonResponse($data);
        $response->setEncodingOptions($response->getEncodingOptions() | JSON_PRETTY_PRINT);
        return $response;
    }

    #[Route("/api/deck/draw", name: "json_deck_draw")]
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

        $response = new JsonResponse($data);
        $response->setEncodingOptions($response->getEncodingOptions() | JSON_PRETTY_PRINT);
        return $response;
    }

    #[Route("/api/deck/draw/{num<\d+>}", name: "json_draw_hand")]
    public function drawHand(
        int $num,
        SessionInterface $session
    ): Response {
        $numCard = $num;

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

        $response = new JsonResponse($data);
        $response->setEncodingOptions($response->getEncodingOptions() | JSON_PRETTY_PRINT);
        return $response;
    }

    #[Route("/api/game", name: "json_game_standing")]
    public function gameStand(
        SessionInterface $session
    ): Response {
        $data = [
            "Players current points: "=>$session->get("player"),
            "Banks current points:"=>$session->get("bank"),
            "Number of games won by player: "=>$session->get("wonPlayer"),
            "Number of games won by bank: "=>$session->get("wonBank")
        ];
        $response = new JsonResponse($data);
        $response->setEncodingOptions($response->getEncodingOptions() | JSON_PRETTY_PRINT);
        return $response;
    }

    #[Route('/api/library/books', name: 'api_library_books')]
    public function showAllLibrary(
        LibraryRepository $libraryRepository
    ): Response {
        $library = $libraryRepository
            ->findAll();
        foreach ($library as $book) {
            $book->getTitle();
            $book->getIsbn();
            $book->getName();
            $book->getImg();
            $book->getId();
        }

        $response = $this->json($library);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route('/api/library/book/{isbn}', name: 'api_library_book', methods: ['GET'])]
    public function updateLibrary(
        LibraryRepository $libraryRepository,
        string $isbn
    ): Response {
        $book = $libraryRepository
            ->findOneBY(['isbn'=>$isbn]);
        $book->getTitle();
        $book->getIsbn();
        $book->getName();
        $book->getImg();
        $book->getId();

        $response = $this->json($book);
        $response->setEncodingOptions(
        $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
