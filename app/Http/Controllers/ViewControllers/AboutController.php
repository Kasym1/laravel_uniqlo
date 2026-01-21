<?php

namespace App\Http\Controllers\ViewControllers;

use App\Http\Controllers\Controller;
use JetBrains\PhpStorm\NoReturn;

class AboutController extends Controller
{
    #[NoReturn]
    public function abouts()
    {
        return view('view_blades.about');
    }
}
