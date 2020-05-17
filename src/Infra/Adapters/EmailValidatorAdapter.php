<?php

namespace App\Infra\Adapters;

use App\Presentation\EmailValidator;

class EmailValidatorAdapter implements EmailValidator
{
    public function isValid(string $email): bool
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        return true;
    }
}