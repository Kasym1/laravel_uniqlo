<?php

namespace App\Http\Controllers\SecondViewControllers;

use App\Http\Controllers\Controller;
use JetBrains\PhpStorm\NoReturn;

class FollowerController extends Controller
{
    #[NoReturn]
    public function followers()
    {
        return view('second_view_blades.followers');
    }
}
