<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class QuestionController
{
    /**
     * @Route ("/")
     */
    public function homepage()
    {
        return new Response('Zespół Muzyki Dawnej "Góra Trolla"');
    }

    /**
     * @Route ("/O nas/co-to-za-zespół")
     */
    public function aboutUs()
    {
        return new Response('strona info o zespole');
    }

    /**
     * @Route ("/kontakt/contact-with-us")
     */
    public function contactUs()
    {
        return new Response('skontaktuj sie z nami');
    }
}