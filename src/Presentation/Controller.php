<?php

namespace App\Presentation;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface Controller
{
    public function handle(RequestInterface $request, ResponseInterface $response);
}