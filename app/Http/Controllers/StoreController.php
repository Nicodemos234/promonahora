<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function create() {
        return view('store.create');
    }

    public function store(Request $request) {
        $store = new Store();
        $store->name = $request->name;
        $store->link = $request->link;
        $store->pic = $request->image;

        $store->save();

        return redirect()->back();
    }
}
