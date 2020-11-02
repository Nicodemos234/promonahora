<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        $category = new Category();
        $category->name = 'Eletrônicos';
        $category->icon = 'laptop';
        $category->save();

        return redirect('/');
    }
}
