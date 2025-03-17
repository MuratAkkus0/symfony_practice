<?php
namespace App\Controller;

use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class MainController extends AbstractController
{
    #[Route("/")]
    public function homepage(UsersRepository $usersRepository): Response
    {
        $users = $usersRepository->getAll();
        return $this->render("main/homepage.html.twig", [
            "users" => $users,
        ]);
    }
}
