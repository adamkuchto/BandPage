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
    public function AboutUs(): Response
    {
       return $this->render('Sites/AboutUs.html.twig');


    }

    /**
     * @Route ("/Contact")
     */
    public function ContactUs(): Response
    {
        return $this->render('Sites/Contact.html.twig');
    }



    /**
     * @Route ("/Calendar")
     */
    public function Calendar(): Response
    {
        return $this->render('Sites/Calendar.html.twig');
    }



}