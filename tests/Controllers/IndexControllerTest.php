<?php
declare(strict_types=1);

namespace App\Tests\Controllers;

use PHPUnit\Framework\TestCase;

class IndexControllerTest extends TestCase
{
    public function testIndexAction(): void
    {
        $this->assertEquals(1, 1);
    }
}
