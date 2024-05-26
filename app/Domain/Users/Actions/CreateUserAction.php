<?php

namespace App\Domain\Users\Actions;

use App\Domain\Users\Models\Users;

class CreateUserAction
{
    public function execute(array $fields): Users
    {
        $users = new Users();
        $users->fill($fields);
        $users->save();

        return $users;
    }
}