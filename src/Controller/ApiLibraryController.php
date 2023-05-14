<?php

namespace App\Controller;

use App\Entity\Library;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\LibraryRepository;

class ApiLibraryController extends AbstractController
{
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
