<?php

namespace App\Controller;

use App\Entity\User;
use App\Repo\UserRepository;

class UserController
{
    public function InsertUser()
    {
        try {
            $user = new User();
            $userRepo = new UserRepository();
            $userRepo->create($user);

            require_once APP_ROOT . '/views/product.php';
        } catch (\Throwable $th) {
            dump($th);
        }
    }
}
