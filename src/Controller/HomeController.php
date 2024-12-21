<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $properties = [
            [
                'name' => 'Property Name',
                'price' => '423.30',
                'image' => '/images/house1.jpg'
            ],
            // Ajoutez d'autres propriétés...
        ];

        return $this->render('home/index.html.twig', [
            'properties' => $properties
        ]);
    }
}
