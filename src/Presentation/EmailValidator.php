<?php

namespace App\Presentation;

interface EmailValidator
{
    public function isValid(string $email): bool;
}