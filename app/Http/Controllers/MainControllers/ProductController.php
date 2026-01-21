<?php

namespace App\Http\Controllers\MainControllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use JetBrains\PhpStorm\NoReturn;

class ProductController extends Controller
{
    #[NoReturn]
    public function products()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store()
    {
        $data = request()->validate([
            'snikers' => 'nullable|string',
            'msm' => 'nullable|string',
            'marshmello' => 'nullable|string'
        ]);
        Product::create($data);
        return redirect()->route('product.index');
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Product $product)
    {
        $data = request()->validate([
            'snikers' => 'string',
            'msm' => 'string',
            'marshmello' => 'string'
        ]);
        $product->update($data);
        return redirect()->route('product.show', $product->id);
    }

    public function delete()
    {
        $products = Product::find(2);
        $products->delete();
        dd('deleted');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
