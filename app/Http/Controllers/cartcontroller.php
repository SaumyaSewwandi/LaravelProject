<?php


namespace App\Http\Controllers;
use App\Cart;
use App\category;
use App\Product;
use Illuminate\Http\Request;
use Session;
class cartcontroller extends Controller
{


    public function cartpage(Request $request) {
        $id=$request->id;
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $categorylist=category::all();
        $request->session()->put('cart', $cart);
       //dd($request->session()->get('cart'));
       return redirect()->route('index',compact('categorylist'));
    }

    public function getCart() {
        if (!Session::has('cart')) {
            $categorylist=category::all();
            return view('layouts.Frontend.cart',compact('categorylist'));
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $categorylist=category::all();
        return view('layouts.Frontend.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice],compact('categorylist'));
    }
    public function getReduceByOne(Request $request) {
        $id=$request->id;
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('getCart');
    }

    public function getRemoveItem(Request $request) {
        $id=$request->id;
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('getCart');
    }

}
