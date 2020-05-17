<?php

namespace App\Data;

interface Encrypter
{
    public function encode(string $string): string;
    public function validate(string $value, string $hash): bool;
}