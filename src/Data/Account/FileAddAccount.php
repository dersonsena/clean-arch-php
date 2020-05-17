<?php

namespace App\Data\Account;

use App\Data\Encrypter;
use App\Domain\Entities\Account\Account;
use App\Domain\UseCases\Account\AddAccount;

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

    public function create(Account $account): bool
    {
        $hashedPassword = $this->encrypter->encode($account->getPassword());
        $account->setPassword($hashedPassword);

        return $this->repository->persist($account);
    }
}