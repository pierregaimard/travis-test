<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function home()
    {
        return new Response('Hello world!');
    }

    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return new Response('Login page!');
    }
}
