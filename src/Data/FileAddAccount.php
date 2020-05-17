<?php

namespace App\Data;

use App\Domain\AddAccount;

class FileAddAccount implements AddAccount
{
    /**
     * @var Encrypter
     */
    private $encrypter;

    /**
     * @var AddUserRepository
     */
    private $repository;

    public function __construct(Encrypter $encrypter, AddUserRepository $repository)
    {
        $this->encrypter = $encrypter;
        $this->repository = $repository;
    }

    public function create(string $name, string $email, int $age, string $password): bool
    {
        $hashedPassword = $this->encrypter->encode($password);

        return $this->repository->persist($name, $email, $age, $hashedPassword);
    }
}