<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * Home page display
     *
     * @Route("/home", name="homepage")
     */
    public function index() : Response
    {
        return $this->render('home/index.html.twig');
    }
}