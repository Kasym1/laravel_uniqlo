<?php

namespace App\Http\Controllers\ViewControllers;

use App\Http\Controllers\Controller;
use JetBrains\PhpStorm\NoReturn;

class MainController extends Controller
{
    #[NoReturn]
    public function main()
    {
        return view('view_blades.main');
    }
}
