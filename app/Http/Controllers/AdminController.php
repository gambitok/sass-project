<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (auth()->user()->role != 'admin') {
            abort(403);
        }

        return view('admin.index');
    }
}
