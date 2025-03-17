<?php
namespace App\Controller;

use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UsersApiController extends AbstractController
{
    public function __construct(private UsersRepository $usersRepository)
    {
    }

    #[Route("/api/users", methods: ["GET", "POST"])]
    public function findAll(): Response
    {
        return $this->json($this->usersRepository->getAll());
    }

    #[Route("/api/users/{id<\d+>}", methods: ["GET", "PUT"], name: "app_usersapi_finduser")]
    public function findUser($id): Response
    {
        // if (!is_numeric($id)) {
        //     return throw $this->createNotFoundException("User not found!");
        // }
        foreach ($this->usersRepository->getAll() as $user) {
            if ($user->id === intval($id)) {
                return $this->json($user);
            }
        }
        return throw $this->createNotFoundException("User not found!");
        ;
    }

}