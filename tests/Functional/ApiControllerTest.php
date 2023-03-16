<?php
declare(strict_types=1);

namespace App\Tests\Functional;

use App\Tests\AbstractEndpointTest;

class ApiControllerTest extends AbstractEndpointTest
{
    public function testVersionAction(): void
    {
        $response = $this->http->request('GET', '/api/version');

        // Verify that the response status code is 200
        $this->assertEquals(200, $response->getStatusCode());

        // Verify that the response body contains the "version" key with the correct value
        $responseBody = json_decode($response->getContent(), true);
        $this->assertEquals('5.1.4', $responseBody['Phalcon']);
        $this->assertEquals('8.1.16', $responseBody['PHP']);
    }
}
