<?php

declare(strict_types=1);

// namespace App\Controllers;
use App\Models\User;
use Phalcon\Mvc\Controller;

class SignupController extends Controller
{
    public function indexAction(): void
    {
    }

    public function registerAction(): void
    {
        $post = $this->request->getPost();

        // Store and check for errors
        $user = new User();
        $user->name = $post['name'];
        $user->email = $post['email'];
        $user->pass = $post['pass'];
        // Store and check for errors
        $success = $user->save();

        // passing the result to the view
        $this->view->success = $success;

        if ($success) {
            $message = 'Thanks for registering!';
        } else {
            $message = 'Sorry, the following problems were generated:<br>'
                . implode('<br>', $user->getMessages());
        }

        // passing a message to the view
        $this->view->message = $message;
//        $this->view->setVar('users', $user);
    }
}
