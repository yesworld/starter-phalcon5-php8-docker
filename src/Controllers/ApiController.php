<?php
declare(strict_types=1);

use Phalcon\Http\Response;
use Phalcon\Mvc\Controller;

class ApiController extends Controller
{
    public function versionAction()
    {
//        $this->view->disable();

        $version = ['Phalcon ver:' => (new Phalcon\Support\Version())->get(),'PHP ver:' => PHP_VERSION];

        $response = new Response();
        $response->setStatusCode(200, 'OK');
        $response->setContentType('application/json');
        $response->setJsonContent($version);

        return $response;
    }
}