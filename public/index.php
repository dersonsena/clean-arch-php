<?php

require_once '../vendor/autoload.php';

use App\Data\Account\FileAddAccount;
use App\Infra\Adapters\BcryptAdapter;
use App\Infra\Adapters\EmailValidatorAdapter;
use App\Infra\Repository\AddAccountTextFile;
use App\Presentation\SignUpController;
use Slim\Psr7\Factory\StreamFactory;
use Slim\Psr7\Factory\UriFactory;
use Slim\Psr7\Headers;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

$encrypter = new BcryptAdapter();
$addUserRepository = new AddAccountTextFile();

$emailValidator = new EmailValidatorAdapter();
$addAccount = new FileAddAccount($encrypter, $addUserRepository);

// creating a request
$uri = (new UriFactory())->createUri('https://example.com:443/foo/bar?name=kilderson sena&email=dersonsena@gmail.com&age=31&password=123456');
$headers = Headers::createFromGlobals();
$cookies = ['user' => 'john', 'id' => '123'];
$serverParams = [];
$body = (new StreamFactory())->createStream();
$uploadedFiles = [];
$request = new Request('GET', $uri, $headers, $cookies, $serverParams, $body, $uploadedFiles);

// creating a response
$response = new Response();

$controller = new SignUpController($emailValidator, $addAccount);
$controller->handle($request, $response);