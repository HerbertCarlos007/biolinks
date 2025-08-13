<?php

namespace App\Http\Controllers;

use App\Models\User;

class WelcomeController
{
    public function __invoke()
    {
        dd(User::factory()->count(100)->create());

        return view('welcome');
    }
}
