<?php

namespace App\Presentation;

use ErrorException;
use App\Domain\Entities\Account\Account;
use App\Domain\UseCases\Account\AddAccount;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class SignUpController implements Controller
{
    /**
     * @var EmailValidator
     */
    private $emailValidator;

    /**
     * @var AddAccount
     */
    private $addAccount;

    public function __construct(EmailValidator $emailValidator, AddAccount $addAccount)
    {
        $this->emailValidator = $emailValidator;
        $this->addAccount = $addAccount;
    }

    public function handle(RequestInterface $request, ResponseInterface $response)
    {
        parse_str($request->getUri()->getQuery(), $params);

        $name = $params['name'] ?? null;
        $email = $params['email'] ?? null;
        $age = $params['age'] ?? null;
        $password = $params['password'] ?? null;

        if (!$this->emailValidator->isValid($email)) {
            throw new ErrorException('Email invalid.');
        }

        $account = Account::create()
            ->setName($name)
            ->setEmail($email)
            ->setAge($age)
            ->setPassword($password);

        $this->addAccount->create($account);

        return 'ok';
    }
}