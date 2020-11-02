<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('product.index', compact('products'));
    }

    public function show($nome, $id)
    {
        $product = Product::find($id);
        return view('product.show', compact('product'));
    }

    public function create()
    {
        $product = new Product();
        $product->name = 'Tênis Olympikus FLY masculino';
        $product->pic = 'https://i.imgur.com/emnqWd3.png';
        $product->link = 'https://amzn.to/3jOb2VR';
        $product->priceof = 'R$ 99,99';
        $product->priceper = 'R$ 74,90';
        $product->description = 'Produto top';

        $store = Store::find(1);
        if ($store) {
            $product->store_id = $store->id;
        }

        $product->save();

        $category = Category::find([1, 2]);
        $product->categories()->attach($category);

        return redirect('/');
    }
}
