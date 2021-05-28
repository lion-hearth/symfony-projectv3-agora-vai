<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MamiferoController extends AbstractController
{
    /**
     * @Route("/mamifero", name="mamifero")
     */
    public function index(): Response
    {
        return $this->render('mamifero/index.html.twig', [
            'controller_name' => 'MamiferoController',
        ]);
    }

    /**
     * @Route("/mamifero/{slug}")
     */
    public function show($slug)
    {
        $respostas = [
            'Esta é a primeira resposta',
            'Esta é a segunda resposta',
            'Esta é a terceira resposta',
            'Esta é a quarta resposta',
            'Esta é a quinta resposta',
        ];
        dump($respostas, $this);
        return $this->render('mamiferos/show.html.twig', [
            'animal' => ucwords( str_ireplace('-' , ' ', $slug)),
            'respostas' => $respostas
        ]);

    }

}
