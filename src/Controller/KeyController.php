<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KeyController extends AbstractController
{
    #[Route("/api/key/{company}", name: "api_key")]
    public function getKey(string $company = null): Response {
        $keyData= [
            "key" => rand(0, 10000),
            "company" => $company,
        ];

        return new JsonResponse($keyData);
    }
}