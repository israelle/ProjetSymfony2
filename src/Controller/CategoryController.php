<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CategoryController extends AbstractController
{

    /**
     * @Route("/category")
     */
    public function index()
    {

        return $this->render('category/category.html.twig');
    }

}