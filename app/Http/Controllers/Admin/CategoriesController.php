<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view ('admin.index');
    }

    public function store(Request $request)
    {
        var_dump($request->all());
        die();
        echo "Crear categoria";
    }
}
