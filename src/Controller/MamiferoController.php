<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class MamiferoController
{
    /**
     * @Route("/")
     */
     public function homepage()
     {
         return new Response('Zoológico');
     }

    /**
     * @Route("/mamifero/{slug}")
     */
     public function show($slug)
     {
         return new Response(
             sprintf(
             'Esta é a página de detalhe do Mamífero "%s"  ' ,
                ucwords( str_ireplace('-' , ' ', $slug) )
             ));
     }
}