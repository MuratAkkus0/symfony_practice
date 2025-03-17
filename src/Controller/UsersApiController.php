<?php
namespace App\Controller;

use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(path: "/api/users/")]
class UsersApiController extends AbstractController
{
    public function __construct(private UsersRepository $usersRepository)
    {
    }

    #[Route("", methods: ["GET", "POST"])]
    public function findAll(): Response
    {
        return $this->json($this->usersRepository->getAll());
    }

    #[Route("{id<\d+>}", methods: ["GET", "PUT"], name: "app_usersapi_finduser")]
    public function findUser($id): Response
    {
        // if (!is_numeric($id)) {
        //     return throw $this->createNotFoundException("User not found!");
        // }
        $users = $this->usersRepository->getAll();
        foreach ($users as $user) {
            $id = intval($id);
            if ($user->id === intval($id)) {
                return $this->render('user/showUser.html.twig', [
                    "users" => $users,
                    "userId" => $id,
                ]);
            }
        }
        return throw $this->createNotFoundException("User not found!");
        ;
    }

}