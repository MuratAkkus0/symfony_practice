<?php
namespace App\Models;
class FakeData
{
    public function __construct(
        public int $id,
        private string $name,
        private string $surname,
        private string $age,
        private string $img,
        private UserStatusEnum $status,
    ) {
    }
    public function id(): int
    {
        return $this->id;
    }
    function getName(): string
    {
        return $this->name;
    }
    function getSurname(): string
    {
        return $this->surname;
    }

    function getAge(): string
    {
        return $this->age;
    }
    function img(): string
    {
        return $this->img;
    }
    function status(): UserStatusEnum
    {
        return $this->status;
    }
}
