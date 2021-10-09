<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Category()
    {
        $categorylist = category::all();
        return view('Category',compact('categorylist'));
        
    }
}
