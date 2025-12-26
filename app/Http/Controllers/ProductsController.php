<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class ProductsController extends Controller
{
    #[NoReturn]
    public function product(): string
    {
        $products = Product::all();
        dd($products);
    }

    public function update()
    {
        $products = Product::find(2);
        dd($products->title);
    }
}