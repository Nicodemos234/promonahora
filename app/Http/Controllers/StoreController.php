<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function create() {
        $store = new Store();
        $store->name = 'Magazine Luiza';
        $store->link = 'https://www.magazinevoce.com.br/magazinepromonahoracupom/';
        $store->pic = 'https://i.imgur.com/xkIRWed.jpg';

        $store->save();

        return redirect('/');
    }
}
