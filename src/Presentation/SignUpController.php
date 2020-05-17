<?php

namespace App\Presentation;

use App\Domain\AddAccount;
use ErrorException;
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

        $this->addAccount->create($name, $email, $age, $password);

        return 'ok';
    }
}