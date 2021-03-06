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
        $products = Product::orderBy('created_at', 'desc')->simplePaginate(20);
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
        $categories = Category::all();
        return view('product.create', compact('stores', 'categories'));
    }

    public function store(Request $request)
    {
        $image = null;
        if($request->hasFile('image')){
            $image = $request->file('image')->store('product');
        }else {
            return redirect()->back()->withErrors('É necessário inserir uma iamgem');
        }
        $product = new Product();
        $product->name = $request->name;
        $product->pic = $image;
        $product->link = $request->link;
        $product->priceof = $request->priceof;
        $product->priceper = $request->priceper;
        $product->description = $request->description;

        $store = Store::find($request->store);
        if ($store) {
            $product->store_id = $store->id;
        }

        $categories = $request->categories;


        $product->save();

        $category = Category::find($categories);
        $product->categories()->attach($category);

        return redirect('/');
    }
}
