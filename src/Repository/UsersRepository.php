<?php
namespace App\Repository;

use App\Models\FakeData;
use App\Models\UserStatusEnum;
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
            new FakeData(1, "Murat", "Akkus", 22, "https://picsum.photos/200/300", UserStatusEnum::ACTIVE),
            new FakeData(2, "Umut", "Akkus", 14, "https://picsum.photos/300/400", UserStatusEnum::BUSY),
            new FakeData(3, "Muhammed", "Akkus", 22, "https://picsum.photos/300/300", UserStatusEnum::OFFLINE),
        ];
    }




}
