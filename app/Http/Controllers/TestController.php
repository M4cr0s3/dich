<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;

class TestController
{
    public function __invoke()
    {
        return Inertia::render('Index');
    }
}
