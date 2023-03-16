<?php

declare(strict_types=1);

namespace App\Tests;

use Phalcon\Di\Di;
use Phalcon\Di\FactoryDefault;
use PHPUnit\Framework\TestCase;

abstract class AbstractUnitTest extends TestCase
{
    public function __construct(string $name)
    {
        parent::__construct($name);

        $di = new FactoryDefault();

        Di::reset();
        Di::setDefault($di);
    }
}
