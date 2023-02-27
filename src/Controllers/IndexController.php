<?php

declare(strict_types=1);

use App\Models\User;
use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction(): void
    {
        $this->view->users = User::find();
    }
}
