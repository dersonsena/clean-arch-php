<?php

namespace App\Domain\UseCases\Account;

use App\Domain\Entities\Account\Account;

interface AddAccount
{
    public function create(Account $account): bool;
}