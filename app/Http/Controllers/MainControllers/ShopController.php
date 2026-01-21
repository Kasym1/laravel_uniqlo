<?php

namespace App\Http\Controllers\MainControllers;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use JetBrains\PhpStorm\NoReturn;

class ShopController extends Controller
{
    #[NoReturn]
    public function shops(): string
    {
        $shops = Shop::all();
        return view('shops', compact('shops'));
    }

    public function create()
    {
        $shopsArr = [
            [
                'name' => 'lining',
                'clients' => 100000,
                'location' => 'Jakarta',
                'director' => 'Mbappe',
                'workers' => 5000,
            ],
            [
                'name' => 'db',
                'clients' => 200000,
                'location' => 'Biskek',
                'director' => 'Babanov',
                'workers' => 6000,
            ]
        ];

        foreach ($shopsArr as $shop) {
            Shop::create($shop);
        }
        dd('shops created');
    }

    public function update()
    {
        $shops = Shop::find(2);
        $shops->save();

        $shops->update([
            'name' => 'updated',
            'clients' => 11,
            'location' => 'updated',
            'director' => 'updated',
            'workers' => 22,
        ]);
        dd('updated', $shops->toArray());
    }

    public function delete(){
        $shop = Shop::find(2);
        $shop->delete();
        dd('deleted');
    }
}
