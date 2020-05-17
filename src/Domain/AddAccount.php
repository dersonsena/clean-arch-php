<?php

namespace App\Domain;

interface AddAccount
{
    public function create(string $name, string $email, int $age, string $password): bool;
}