<?php
namespace App\Repository;

use App\Models\FakeData;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UsersRepository extends AbstractController
{
    public function __construct(private LoggerInterface $logger)
    {
    }
    public function getAll(): array
    {
        $this->logger->info("User list retrieved.");
        return [
            new FakeData(1, "Murat", "Akkus", 22),
            new FakeData(2, "Umut", "Akkus", 14),
            new FakeData(3, "Muhammed", "Akkus", 22),
        ];
    }




}
