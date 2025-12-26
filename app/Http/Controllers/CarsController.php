<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class CarsController extends Controller
{
    #[NoReturn]
    public function cars(): string
    {
        $cars = Cars::find(1);
        dd($cars);
    }
}
