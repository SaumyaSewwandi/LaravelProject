<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Product;
class Frontend extends Controller
{
    public function index()
    {
        $productlist=Product::all();
        return view('layouts.Frontend.index',compact('productlist'));

    }
}
