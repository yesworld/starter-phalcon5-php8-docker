<?php
declare(strict_types=1);

namespace App\Tests\Functional;
use PHPUnit\Framework\Attributes\DataProvider;
use App\Tests\AbstractEndpointTest;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class ApiControllerTest extends AbstractEndpointTest
{
    public function testVersionAction(): void
    {
        $response = $this->http->request('GET', '/api/version');

        // Verify that the response status code is 200
        $this->assertEquals(200, $response->getStatusCode());

        // Verify that the response body contains the "version" key with the correct value
        $responseBody = json_decode($response->getContent(), true);
        $this->assertEquals('5.2.1', $responseBody['Phalcon']);
        $this->assertEquals('8.2.4', $responseBody['PHP']);
    }

    public static function dataRoutingList(): array
    {
        return [
            ['index' => '/'],
            ['signup' => '/signup'],
            ['version' => '/api/version']
        ];
    }

    /**
     * @throws TransportExceptionInterface
     */
    #[DataProvider('dataRoutingList')]
    public function testCheckStatusCodeForSuccess($route): void
    {
        $response = $this->http->request('GET', $route);

        // Verify that the response status code is 200
        $this->assertEquals(200, $response->getStatusCode());
    }

    public static function dataRoutingList(): array
    {
        return [
            ['index' => '/'],
            ['signup' => '/signup'],
            ['version' => '/api/version']
        ];
    }

    #[DataProvider('dataRoutingList')]
    public function testCheckStatusCodeForSuccess($route): void
    {
        $response = $this->http->request('GET', $route);

        // Verify that the response status code is 200
        $this->assertEquals(200, $response->getStatusCode());
    }
}
