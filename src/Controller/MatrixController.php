<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MatrixController extends AbstractController
{
    #[Route('/', name: "app_homepage")]
    public function homePage(): Response {
        return $this->render("matrix/homePage.html.twig", [
            "header" => "Matrix Game Showcase",
        ]);
    }

    #[Route("/about", name: "app_about")]
    public function about(): Response {
        return $this->render("matrix/about.html.twig", [
            "header" => "About",
        ]);
    }

    #[Route("/giveaways", name: "app_giveaways")]
    public function giveaways(): Response {
        return $this->render("matrix/giveaways.html.twig", [
            "header" => "Giveaways",
        ]);
    }

    #[Route("/login", name: "app_login")]
    public function login(): Response {
        return $this->render("matrix/login.html.twig", [
            "header" => "Log In",
        ]);
    }
}