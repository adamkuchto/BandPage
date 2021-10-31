<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class Controller extends AbstractController
{
    /**
     * @Route ("/")
     */
    public function homepage()
    {
        return $this->render('Sites/HomePage.html.twig');
    }

    /**
     * @Route ("/About Us/")
     */
    public function AboutUs()
    {
       return $this->render('Sites/AboutUs.html.twig', [
           'AboutUs' => ("We are the best band in the world!")
       ]);
    }

    /**
     * @Route ("/Contact")
     */
    public function ContactUs()
    {
        return $this->render('Sites/Contact.html.twig');
    }
}