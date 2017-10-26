<?php

namespace App\Http\Controllers;
use App\product;
use App\cart_item;
use Illuminate\Http\Request;
use DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::all();
        return view('home', compact ('products'));

    }


    public function addtocart(Request $request, $id)
    {
       $products = product::find($id);
       $carts = new cart_item; 
       $carts-> name = $products->name;
       $carts-> description = $products->description;
       $carts-> category_id = $products->category_id;
       $carts-> price = $products->price;
       $carts-> img = $products->img;
       $carts-> barcode =$products->barcode;
       $carts->save();

        \Session::flash('flash_message', 'Items Sucessfully Added to cart');

       return redirect('/home');

       return redirect()->back();
    
    }

    public function getCart() {
        $carts = cart_item::all();

        return view('cart', compact('carts'));
    }

    public function deletecart(Request $request, $id){
        $cart_items = cart_item::where('id', $id)->delete();

        return redirect()->back();
      }

    

}