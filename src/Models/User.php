<?php

declare(strict_types=1);

namespace App\Models;

use Phalcon\Mvc\Model;

class User extends Model
{
    public ?int $id = null;
    public string $name;
    public string $email;
    public string $pass;

    public function initialize(): void
    {
        $this->setSource('users');
    }
}
