<?php

namespace App\Tests\Controllers;

use App\Controllers\ApiController;
use Phalcon\Http\Response;
use PHPUnit\Framework\TestCase;
use Phalcon\Mvc\Router;

class ApiControllerTest extends TestCase
{

    public function testIndexAction()
    {
        json_encode(['Phalcon ver:' => '5.1.4','PHP ver:' => '8.1.16']);
    }
}
