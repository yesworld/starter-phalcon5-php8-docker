<?php

declare(strict_types=1);

namespace App\Tests\Units;

use App\Tests\AbstractUnitTest;

class UnitTest extends AbstractUnitTest
{
    public function testTestCase(): void
    {
        $this->assertEquals('roman', 'roman', 'This will pass');

        // $this->assertEquals('hope', 'ava', 'This will fail');
    }
}
