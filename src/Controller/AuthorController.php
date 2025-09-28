<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AuthorController extends AbstractController
{
    
#[Route('/authors', name: 'list_authors')]
public function listAuthors(): Response
{
    $authors = [
        [
            'id' => 1,
            'picture' => '/images/Victor-Hugo.jpg',
            'username' => 'Victor Hugo',
            'email' => 'victor.hugo@gmail.com',
            'nb_books' => 100
        ],
        [
            'id' => 2,
            'picture' => '/images/Wlliam-Shakespeare.jpg',
            'username' => 'William Shakespeare',
            'email' => 'william.shakespeare@gmail.com',
            'nb_books' => 200
        ],
        [
            'id' => 3,
            'picture' => '/images/TahaHussein.jpg',
            'username' => 'Taha Hussein',
            'email' => 'taha.hussein@gmail.com',
            'nb_books' => 300
        ]
    ];

    return $this->render('author/list.html.twig', [
        'authors' => $authors,
    ]);
}

#[Route('/author/details/{id}', name: 'author_details')]
public function authorDetails($id): Response
{
    $authors = [
        1 => [
            'id' => 1,
            'picture' => '/images/Victor-Hugo.jpg',
            'username' => 'Victor Hugo',
            'email' => 'victor.hugo@gmail.com',
            'nb_books' => 100
        ],
        2 => [
            'id' => 2,
            'picture' => '/images/William-Shakespeare.jpg',
            'username' => 'William Shakespeare',
            'email' => 'william.shakespeare@gmail.com',
            'nb_books' => 200
        ],
        3 => [
            'id' => 3,
            'picture' => '/images/TahaHussein.jpg',
            'username' => 'Taha Hussein',
            'email' => 'taha.hussein@gmail.com',
            'nb_books' => 300
        ]
    ];

    $author = $authors[$id] ;

    return $this->render('author/showAuthor.html.twig', [
        'author' => $author,
    ]);
}
}
