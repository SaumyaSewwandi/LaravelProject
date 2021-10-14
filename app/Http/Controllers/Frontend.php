<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Product;
class Frontend extends Controller

{
    public function index(Request $request)
    {
        $productlist=Product::all();
        $categorylist=category::all();
       
        $category_id=$request->category_id;

        if( $productlist1=Product::where('category_id',$category_id)->exists()){
        
            $productlist1=Product::where('category_id',$category_id)->get();
        //dd( $productlist1);
        return view('layouts.Frontend.index',compact('productlist','categorylist','productlist1'));
        }
        else{
            $productlist1=Product::where('category_id','1')->get();
            return view('layouts.Frontend.index',compact('productlist','categorylist','productlist1'));
        }
    }

    public function detailpage(Request $request ) {
    
        $id=$request->id;
        $categorylist=category::all();
        $product=Product::find($id);
        $category_id=$product->category_id;
        $relatedproduct=Product::where('category_id',$category_id)->get();
       return view('layouts.Frontend.detail',compact('product','categorylist','relatedproduct'));
       

       
    }
    
    public function searchdata(Request $request ){
        if($request->get('search')){
            $result = $request->get('search');
            

        $categorylist=category::all();
        $productlist = Product::where('name','like','%' .$result.'%')->get();
        
        return view('layouts.Frontend.searchdata',compact('productlist','categorylist'));
       
        }

        
        

       
    }
    
}
