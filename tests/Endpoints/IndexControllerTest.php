<?php
declare(strict_types=1);

namespace App\Tests\Endpoints;

use App\Tests\AbstractEndpointTest;

class IndexControllerTest extends AbstractEndpointTest
{
    public function testIndexAction(): void
    {
        $response = $this->http->request('GET', 'http://localhost');

        // Verify that the response status code is 200
        $this->assertEquals(200, $response->getStatusCode());

        // Verify that the response body contains the "version" key with the correct value
        $responseBody = json_decode($response->getContent(), true);
        $this->assertArrayHasKey('version', $responseBody);
        $this->assertEquals('1.0.0', $responseBody['version']);
    }
}
