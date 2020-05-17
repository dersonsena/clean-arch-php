<?php

namespace App\Infra\Repository;

use App\Data\AddUserRepository;
use ErrorException;

class AddAccountTextFile implements AddUserRepository
{
    public function persist(string $name, string $email, int $age, string $password): bool
    {
        $data = "\"{$name}\",\"{$email}\",\"{$age}\",\"{$password}\"\n";

        if (!file_put_contents(__DIR__ . '/../../../database/accounts.csv', $data, FILE_APPEND)) {
            throw new ErrorException('There is an error on write in text file.');
        }

        return true;
    }
}