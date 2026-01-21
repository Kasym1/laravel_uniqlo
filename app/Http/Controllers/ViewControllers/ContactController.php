<?php

namespace App\Http\Controllers\ViewControllers;

use App\Http\Controllers\Controller;
use JetBrains\PhpStorm\NoReturn;

class ContactController extends Controller
{
    #[NoReturn]
    public function contacts()
    {
        return view('view_blades.contacts');
    }
}
