<?php

namespace App\Http\Controllers\MainControllers;

use App\Http\Controllers\Controller;
use App\Models\Post2;
use JetBrains\PhpStorm\NoReturn;

class PostController2 extends Controller
{
    #[NoReturn]
    public function family(): string
    {
        $post_table2 = Post2::all();
        dd($post_table2);
    }

    public function create()
    {
        $familyArr = [
            [
                'kasym' => '1 kasym',
                'ibrahim' => '1 ibrahim',
                'hamza' => '1 hamza',
                'umar' => '1 umar',
                'yusuf' => '1 yusuf',
                'bilal' => '1 bilal',
            ],
            [
                'kasym' => '2 kasym',
                'ibrahim' => '2 ibrahim',
                'hamza' => '2 hamza',
                'umar' => '2 umar',
                'yusuf' => '2 yusuf',
                'bilal' => '2 bilal',
            ]
        ];

        foreach ($familyArr as $family) {
            Post2::create($family);
        }
        dd('family created');
    }

    public function update()
    {
        $post_table2 = Post2::find(4);
        $post_table2->save();

        $post_table2->update([
            'kasym' => '3 kasym',
            'ibrahim' => '3 ibrahim',
            'hamza' => '3 hamza',
            'umar' => '3 umar',
            'yusuf' => '3 yusuf',
            'bilal' => '3 bilal',
        ]);
        dd('family updated', $post_table2->toArray());
    }

    public function delete(){

        $family = Post2::find(2);
        $family->delete();
        dd('family deleted');
    }
}
