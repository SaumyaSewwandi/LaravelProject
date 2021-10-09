<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\category;
use App\Product;
class Dashboard extends Controller
{
    
    
    
    public function productpage() {
      
        $productlist=Product::all();
        return view('product',compact('productlist'));

    }
    
    public function addproductpage()
    {
        $categorylist=category::all();
        return view('addproduct',compact('categorylist'));

        
    }
    public function saveproductdata(Request $request ){

        $product = new Product();
        if($request->hasFile('image'))
        {

            $file= $request->file('image');
            $ext= $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/',$filename);
            $product ->image=$filename;


        }


        $product ->name=$request->name;
        $product ->description=$request->description;
        $product ->regularprice=$request->regularprice;
        $product ->saleprice=$request->saleprice;
        $product ->category_id=$request->category_id;
        
        $status=$product ->save();
        if($status){
           return redirect()->route('productpage')->with('success', 'Successfully data added..');
       }else{
           return back()->with('Erorr ','somthing error');
       }

       
   }
  
   public function editproductpage(Request $request ) {
    
    $id=$request->id;
    $product=product::find($id);
    $categorylist=category::all();
    
    return view('editproduct',compact('product','categorylist'));
   
}
   public function editproductpagecat() {
    
    $categorylist=category::all();
    return view('editproduct',compact('categorylist'));
}

    public function updateproduct(Request $request ) {
        $id=$request->id;
        $product=product::find($id);
    
        if($request->hasFile('image'))
        {
            $path = "assets/uploads/{{$product->image}}";
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file= $request->file('image');
            $ext= $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/',$filename);
            $product ->image=$filename;


        }
        $product ->name=$request->name;
        $product ->description=$request->description;
        $product ->regularprice=$request->regularprice;
        $product ->saleprice=$request->saleprice;
        $product ->category_id=$request->category_id;
        
       
       
        $status=$product ->update();
        if($status){
           return redirect()->route('productpage')->with('success', 'Successfully data Updated..');
       }else{
           return back()->with('Erorr ','somthing error');
       }
       
    }
    public function deleteproduct(Request $request){
        $id=$request->id;
        $status= product::destroy($id);
        if($status){
            return redirect()->route('productpage')->with('success', 'Successfully data deleted..');
        }else{
            return back()->with('Erorr ','somthing error');
        }
     }
    public function saveCategory(Request $request ){
        $category = new category;
        $category ->name=$request->name;
       
        $status=$category ->save();
        if($status){
           return redirect()->route('Category')->with('success', 'Successfully data added..');
       }else{
           return back()->with('Erorr ','somthing error');
       }
    }
    
         public function editcategory(Request $request ) {
            $id=$request->id;
            $category=category::find($id);
    
            return view('editcategory',compact('category'));
           
        }

public function updatecategory(Request $request ) {
    $id=$request->id;
    $category=category::find($id);

    
    $category ->name=$request->name;
   
    $status=$category ->save();
    if($status){
       return redirect()->route('Category')->with('success', 'Successfully data Updated..');
   }else{
       return back()->with('Erorr ','somthing error');
   }
   
}
public function deletecategory(Request $request){
    $id=$request->id;
    $status= category::destroy($id);
    if($status){
        return redirect()->route('Category')->with('success', 'Successfully data deleted..');
    }else{
        return back()->with('Erorr ','somthing error');
    }
 }

}
