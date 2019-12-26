<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DestinationsController extends AbstractController
{
    /**
     * @Route("/destinations", name="destinations")
     */
    public function index()
    {
        return $this->render('destinations/index.html.twig');
    }
}
