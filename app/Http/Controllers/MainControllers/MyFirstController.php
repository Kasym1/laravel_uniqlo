<?php

namespace App\Http\Controllers\MainControllers;

use App\Http\Controllers\Controller;

class MyFirstController extends Controller
{
    public function bishkek(): string
    {
        return 'Bishkek is the central city of Kyrgyzstan';
    }
    public function osh(): string
    {
        return 'Osh is the second central city of Kyrgyzstan';
    }
    public function manas(): string{
        return 'Manas is the third central city of Kyrgyzstan';
    }
    public function karakol(): string{
        return 'Karakol is the fourth central city of Kyrgyzstan';
    }
    public function talas(): string
    {
        return 'Talas is the fifth city of Kyrgyzstan';
    }
    public function batken(): string
    {
        return 'Batken is the sixth city of Kyrgyzstan';
    }
}
