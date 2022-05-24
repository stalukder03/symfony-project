<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return new Response(content:'<h1>Welcome to SFCourse</h1>');
    }

    /**
     * @Route("/custom", name="custom")
     */
    public function custom()
    {
        return new Response(content:'<h1>Custom Page</h1>');
    }
}
