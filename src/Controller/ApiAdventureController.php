<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ItemRepository;
use App\Repository\BinRepository;
use App\Repository\RoomRepository;
use App\Entity\Bin;
use App\Entity\Item;
use App\Entity\Room;


class ApiAdventureController extends AbstractController
{
    
    #[Route('/api/proj/', name: 'api_project_get', methods:['GET'])]
    public function Index(): Response
    {
        return $this->render('api_adventure/index.html.twig');
    }

    #[Route('/api/proj/item', name: 'api_project_item', methods:['POST'])]
    public function getitems(
        ItemRepository $itemRepository
    ): Response
    {
        $item = $itemRepository
            ->findAll();
        foreach ($item as $thing) {
            $thing->getName();
            $thing->getImg();
            $thing->getRoom();
            $thing->getPlace();
            $thing->getCondition();
        }
        
        $response = $this->json($item);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route('/api/proj/bin', name: 'api_project_bin', methods:['POST'])]
    public function getBin(
        BinRepository $binRepository
    ): Response
    {
        $bin = $binRepository
            ->findAll();
        foreach ($bin as $thing) {
            $thing->getName();
            $thing->getImg();
            $thing->getRoom();
            $thing->getPlace();
            $thing->getCondition();
        }
        
        $response = $this->json($bin);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route('/api/proj/room', name: 'api_project_room', methods:['POST'])]
    public function getRooms(
        RoomRepository $roomRepository
    ): Response
    {
        $room = $roomRepository
            ->findAll();
        foreach ($room as $place) {
            $place->getName();
            $place->getImg();
            $place->getArrowUp();
            $place->getArrowDown();
            $place->getArrowLeft();
            $place->getArrowRight();
        }
        
        $response = $this->json($room);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
