<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Library;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\LibraryRepository;

class LibraryController extends AbstractController
{
    #[Route('/library', name: 'app_library')]
    public function index(): Response
    {
        return $this->render('library/index.html.twig', [
            'controller_name' => 'LibraryController',
        ]);
    }

    #[Route('/library/create', name: 'library_create_get', methods: ['GET'])]
    public function createLibrary(): Response
    {
        return $this->render('library/create.html.twig');
    }

    #[Route('/library/create', name: 'library_create_post', methods: ['POST'])]
    public function createLibrarycallback(
        ManagerRegistry $doctrine,
        Request $request
    ): Response {
        $entityManager = $doctrine->getManager();

        $title = $request->request->get('title');
        $isbn = $request->request->get('isbn');
        $name = $request->request->get('name');
        $img = $request->request->get('img');
        $library = new Library();
        $library->setTitle($title);
        $library->setIsbn($isbn);
        $library->setName($name);
        $library->setImg($img);

        $entityManager->persist($library);

        $entityManager->flush();

        return new Response('Saved new Library with id '.$library->getId());
    }

    #[Route('/library/show', name: 'library_show_all')]
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
        $data = [
            'library'=>$library
        ];

        return $this->render('library/show.html.twig', ['library' =>$library]);
    }

    #[Route('/library/show/{id}', name: 'library_by_id', methods: ['GET'])]
    public function showLibraryById(
        LibraryRepository $libraryRepository,
        int $id
    ): Response {
        $book = $libraryRepository
            ->find($id);
        $book->getTitle();
        $book->getIsbn();
        $book->getName();
        $book->getImg();
        $book->getId();

        return $this->render('library/show_one.html.twig', ['book'=>$book]);
    }
}
