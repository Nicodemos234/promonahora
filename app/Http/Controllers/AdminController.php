<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()
                ->back()
                ->withErrors("Failed");
        }
    }
}
