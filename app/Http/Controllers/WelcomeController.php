<?php

namespace App\Http\Controllers;

use App\Models\User;

class WelcomeController
{
    public function __invoke()
    {
        return view('welcome');
    }
}
