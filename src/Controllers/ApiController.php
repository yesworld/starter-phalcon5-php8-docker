<?php
declare(strict_types=1);

use Phalcon\Http\Response;
use Phalcon\Mvc\Controller;

class ApiController extends Controller
{
    public function versionAction()
    {
        $response = new Response();
        $response->setStatusCode(200, 'OK');
        $response->setContentType('application/json');

        $response->setJsonContent([
            'Phalcon' => (new Phalcon\Support\Version())->get(),
            'PHP' => PHP_VERSION,
        ]);

        return $response;
    }
}