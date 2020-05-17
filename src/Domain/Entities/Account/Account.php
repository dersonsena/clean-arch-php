<?php

declare(strict_types=1);

namespace App\Domain\Entities\Account;

final class Account
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var int
     */
    private $age;

    /**
     * @var string
     */
    private $password;

    private function __construct()
    {
    }

    public static function create(): Account
    {
        return new static();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Account
     */
    public function setName(string $name): Account
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Account
     */
    public function setEmail(string $email): Account
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return Account
     */
    public function setAge(int $age): Account
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Account
     */
    public function setPassword(string $password): Account
    {
        $this->password = $password;
        return $this;
    }
}