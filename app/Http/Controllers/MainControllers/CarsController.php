<?php

namespace App\Http\Controllers\MainControllers;

use App\Http\Controllers\Controller;
use App\Models\Cars;
use JetBrains\PhpStorm\NoReturn;

class CarsController extends Controller
{
    #[NoReturn]
    public function cars(): string
    {
        $cars = Cars::all();
        dd($cars);
    }

    public function create()
    {
        $carsArray = [
            [
                'bmw' => '1 bmw',
                'mersedes' => '1 mersedes',
                'audi' => ' 1 audi',
                'hyundai' => ' 1 hyundai',
                'kia' => ' 1 kia',
                'porche' => '1 porche',
                'ferrari' => '1 ferrari',
                'lamborgini' => '1 lamborgini',
           ]
        ];

        foreach ($carsArray as $car) {
            Cars::create($car);
        }
        dd('cars created');
    }

    public function update(){

        $carsArray = Cars::find(1);
        $carsArray->save();

        $carsArray->update([
            'bmw' => '1 bmw',
            'mersedes' => '1 mersedes',
            'audi' => ' 1 audi',
            'hyundai' => ' 1 hyundai',
            'kia' => ' 1 kia',
            'porche' => '1 porche',
            'ferrari' => '1 ferrari',
            'lamborgini' => '1 lamborgini'
        ]);
        dd('cars updated', $carsArray->toArray());
    }

    public function delete(){

        $cars = Cars::find();
        $cars->delete();
        dd('cars deleted');
    }
}
