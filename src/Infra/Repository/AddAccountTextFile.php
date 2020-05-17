<?php

namespace App\Infra\Repository;

use App\Data\Account\AddUserRepository;
use App\Domain\Entities\Account\Account;
use ErrorException;

class AddAccountTextFile implements AddUserRepository
{
    public function persist(Account $account): bool
    {
        $data = "\"{$account->getName()}\",\"{$account->getEmail()}\",\"{$account->getAge()}\",\"{$account->getPassword()}\"" . PHP_EOL;

        if (!file_put_contents(__DIR__ . '/../../../database/accounts.csv', $data, FILE_APPEND)) {
            throw new ErrorException('There is an error on write in text file.');
        }

        return true;
    }
}