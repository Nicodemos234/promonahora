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

        $image = null;
        if($request->hasFile('image')) {
            $capa = $request->file('image')->store('store');
        }else {
            redirect()->back()->withErrors('É necessário inserir uma imagem');
        }

        $store = new Store();
        $store->name = $request->name;
        $store->link = $request->link;
        $store->pic = $capa;

        $store->save();

        return redirect()->back();
    }
}
