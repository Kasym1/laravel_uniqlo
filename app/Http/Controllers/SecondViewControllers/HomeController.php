<?php

namespace App\Http\Controllers\SecondViewControllers;

use App\Http\Controllers\Controller;
use JetBrains\PhpStorm\NoReturn;

class HomeController extends Controller
{
    #[NoReturn]
    public function home()
    {
        return view('second_view_blades.home');
    }
}
