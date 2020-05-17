<?php

namespace App\Data\Account;

use App\Domain\Entities\Account\Account;

interface AddUserRepository
{
    public function persist(Account $account): bool;
}