<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ItemRepository;
use App\Repository\BinRepository;
use App\Repository\RoomRepository;
use App\Entity\Bin;
use App\Entity\Item;
use App\Entity\Room;

class AdventureController extends AbstractController
{
    #[Route('/proj', name: 'project_get', methods:['GET'])]
    public function index(): Response
    {
        return $this->render('adventure/index.html.twig');
    }

    #[Route('/proj', name: 'project_post', methods:['POST'])]
    public function indexCallback(): Response
    {
        copy('../var/dataCopy.db', '../var/data.db');

        return $this->redirectToRoute('adventure', ['room'=>'vardagsrum']);
    }


    #[Route('/adventure/{room}', name: 'adventure')]
    public function show(
        ItemRepository $itemRepository,
        Binrepository $binRepository,
        RoomRepository $roomRepository,
        string $room
    ): Response {
        $item = $itemRepository
            ->findBy(array('room'=>$room));
        $bin = $binRepository
            ->findAll();
        $room = $roomRepository
            ->findBy(array('name'=>$room));

        foreach ($bin as $object) {
            $object->getName();
            $object->getImg();
            $object->getRoom();
            $object->getPlace();
            $object->getCondition();
        }

        foreach ($item as $thing) {
            $thing->getName();
            $thing->getImg();
            $thing->getRoom();
            $thing->getPlace();
            $thing->getCondition();
        }

        foreach ($room as $place) {
            $place->getName();
            $place->getImg();
            $place->getArrowUp();
            $place->getArrowDown();
            $place->getArrowLeft();
            $place->getArrowRight();
        }

        return $this->render('adventure/home.html.twig', ['item' =>$item, 'bin'=>$bin, 'room'=>$room[0]]);
    }


    #[Route('/adventure/updateBin/{name}', name: 'bin_update')]
    public function updateBin(
        ItemRepository $itemRepository,
        BinRepository $binRepository,
        string $name,
        ManagerRegistry $doctrine,
    ): Response {
        $entityManager = $doctrine->getManager();
        $allBin = $binRepository->findAll();

        $item = $itemRepository
            ->findOneBy(['name'=>$name]);

        $condition = $item->getCondition();
        $conditionItem = $binRepository->findOneBy(['name'=>$condition]);
        if (sizeof($allBin) >= 6) {
            $this->addFlash(
                'lose',
                'Du har för mycket i din korg! Lägg tillbaka något innan 
                du kan ta mer.'
            );
            return $this->redirectToRoute('adventure', ['room'=> $item->getRoom()]);

        }
        if ($conditionItem || $condition =='') {
            $bin = new Bin();

            $bin->setName($item->getName());
            $bin->setImg($item->getImg());
            $bin->setRoom($item->getRoom());
            $bin->setPlace($item->getPlace());
            $bin->setCondition($item->getCondition());

            $entityManager->persist($bin);

            $entityManager->flush();
            $allBin = $binRepository->findAll();


            $binName = [];

            foreach ($allBin as $object) {

                $binName[]=$object->getName();
            }

            $ingredients = ['socker', 'mjöl', 'ägg', 'jordgubbar', 'grädde'];
            $ready = !array_diff($ingredients, $binName);
            if ($ready) {

                return $this->redirectToRoute('adventure_ready');
            }


            return $this->redirectToRoute('item_delete', ['name'=>$name]);
        }

        $this->addFlash(
            'lose',
            'Det saknas '. $condition . ' i din korg för att du ska kunna
            ta ' . $name . '. Börja om!'
        );
        return $this->redirectToRoute('adventure', ['room'=> $item->getRoom()]);
    }

    #[Route('/itemDelete/{name}', name: 'item_delete')]
    public function deleteItem(
        ItemRepository $itemRepository,
        BinRepository $binRepository,
        string $name
    ): Response {
        $bin = $binRepository
            ->findOneBy(['name'=> $name]);
        $room = $bin->getRoom();
        $item = $itemRepository
            ->findOneBy(['name' => $name]);
        if (!$item) {
            throw $this->createNotFoundException(
                'No item found for name '.$name
            );
        }

        $itemRepository->remove($item, true);

        return $this->redirectToRoute('adventure', ['room'=>$room]);
    }
    #[Route('/adventure/updateItem/{name}', name: 'item_update')]
    public function updateItem(
        BinRepository $binRepository,
        string $name,
        ManagerRegistry $doctrine,
    ): Response {
        $entityManager = $doctrine->getManager();

        $binItem = $binRepository
            ->findOneBy(['name'=>$name]);

        $item = new Item();

        $item->setName($binItem->getName());
        $item->setImg($binItem->getImg());
        $item->setRoom($binItem->getRoom());
        $item->setPlace($binItem->getPlace());
        $item->setCondition($binItem->getCondition());

        $entityManager->persist($item);

        $entityManager->flush();

        return $this->redirectToRoute('bin_delete', ['name'=>$name]);
    }

    #[Route('/binDelete/{name}', name: 'bin_delete')]
    public function deleteBin(
        ItemRepository $itemRepository,
        BinRepository $binRepository,
        string $name
    ): Response {
        $item = $itemRepository
            ->findOneBy(['name'=> $name]);
        $room = $item->getRoom();
        $bin = $binRepository
            ->findOneBy(['name' => $name]);
        if (!$bin) {
            throw $this->createNotFoundException(
                'No item found for name '.$name
            );
        }

        $binRepository->remove($bin, true);

        return $this->redirectToRoute('adventure', ['room'=>$room]);
    }

    #[Route('/adventureReady', name: 'adventure_ready')]
    public function ready(): Response
    {
        return $this->render('adventure/ready.html.twig');
    }

}
