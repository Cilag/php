<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserBoardController extends AbstractController
{
    #[Route('/user/board', name: 'app_user_board')]
    public function index(): Response
    {
        return $this->render('user_board/index.html.twig', [
            'controller_name' => 'UserBoardController',
        ]);
    }
}
