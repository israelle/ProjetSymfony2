<?php
/**
 * Created by PhpStorm.
 * User: dadan
 * Date: 19/07/2019
 * Time: 20:43
 */

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MatchController extends AbstractController
{

    /**
     * @Route("/match/number")
     */
    public function index()
    {
        $number = random_int(0, 100);

        return $this->render('match/match.html.twig', [
            'number' => $number,
        ]);
    }

}