<?php

declare(strict_types=1);

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

abstract class AbstractEndpointTest extends TestCase
{
    protected HttpClientInterface $http;

    public function __construct(string $name)
    {
        parent::__construct($name);

        $this->http = HttpClient::create([
            'base_uri' => 'http://phalcon-nginx',
        ]);
    }
}
