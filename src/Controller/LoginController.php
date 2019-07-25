<?php
/**
 * Created by PhpStorm.
 * User: dadan
 * Date: 25/07/2019
 * Time: 22:07
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoginController extends AbstractController
{
    /**
     * @Route("/login")
     */
    public function index()
    {

        $title = 'Login';
        return $this->render('login/login.html.twig',
            ['title' => $title]);
    }

}