<?php

namespace App\Infra\Adapters;

use App\Data\Encrypter;

class BcryptAdapter implements Encrypter
{
    public function encode(string $string): string
    {
        return password_hash($string, PASSWORD_BCRYPT);
    }

    public function validate(string $value, string $hash): bool
    {
        if (!password_verify($value, $hash)) {
            return false;
        }

        return true;
    }
}