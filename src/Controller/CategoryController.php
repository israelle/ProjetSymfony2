<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CategoryController extends AbstractController
{

    /**
     * @Route("/menu")
     */
    public function index()
    {

        $title = 'Projet Symfony';
        return $this->render('menu/index.html.twig',
        ['title' => $title]);
    }

}