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
        $stores = Store::all();
        return view('product.create', compact('stores'));
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->pic = $request->image;
        $product->link = $request->link;
        $product->priceof = $request->priceof;
        $product->priceper = $request->priceper;
        $product->description = $request->description;

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
