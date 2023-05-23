<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Item;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\ItemRepository;

class ItemController extends AbstractController
{
    #[Route('/item', name: 'app_item')]
    public function Index(): Response
    {
        return $this->render('item/index.html.twig', [
            'controller_name' => 'ItemController',
        ]);
    }
    #[Route('/item/show', name: 'item_show_all')]
    public function showAllItem(
        ItemRepository $itemRepository
    ): Response {
        $Item = $itemRepository
            ->findAll();

            foreach ($Item as $thing) {
                $thing->getName();
                $thing->getImg();
                $thing->getRoom();
                $thing->getPlace();
                $thing->getCondition();
            }
    
            return $this->render('adventure/home.html.twig', ['item' =>$Item]);    }
}