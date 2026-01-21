<?php

namespace App\Http\Controllers\SecondViewControllers;

use App\Http\Controllers\Controller;
use JetBrains\PhpStorm\NoReturn;

class WorkerController extends Controller
{
    #[NoReturn]
    public function workers()
    {
        return view('second_view_blades.workers');
    }
}
