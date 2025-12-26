<?php

namespace App\Http\Controllers;

use App\Models\Post2;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class PostController2 extends Controller
{
    #[NoReturn]
    public function family(): string
    {
        $post_table2 = Post2::all();
        dump($post_table2);
        dump($post_table2);
        dump($post_table2);
        die();

        dd($post_table2);
//        dump_die($post_table2);;
    }
}
