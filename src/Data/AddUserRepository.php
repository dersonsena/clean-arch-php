<?php

namespace App\Data;

interface AddUserRepository
{
    public function persist(string $name, string $email, int $age, string $password): bool;
}