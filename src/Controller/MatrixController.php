<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MatrixController extends AbstractController
{
    #[Route('/')]
    public function homePage(): Response {
        return $this->render("matrix/homePage.html.twig", [
            "title" => "Matrix Games",
        ]);
    }

    #[Route("/about")]
    public function about(): Response {
        return $this->render("matrix/about.html.twig", [
            "title" => "About Us",
        ]);
    }

    #[Route("/giveaways")]
    public function giveaways(): Response {
        return $this->render("matrix/giveaways.html.twig", [
            "title" => "Giveaways",
        ]);
    }

    #[Route("/login")]
    public function login(): Response {
        return $this->render("matrix/login.html.twig", [
            "title" => "Log In",
        ]);
    }
}