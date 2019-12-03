<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartItem;
use App\Product;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cart = Cart::where("user_id", Auth::user()->id)->where("status", 1)->with('items.product')->first();

      if ($cart != NULL) {
        return view('cart', compact('cart'));
      } else {
        return redirect('/');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {

        // if(auth()->guest()){
        //   return redirect('/login');
        // }

         $product = Product::find($request->input('id'));

         $cart = Cart::where("user_id", Auth::user()->id)->where("status", 1)->first();

         if (!isset($cart)) {
           $cart = new Cart;
           $cart->user_id = Auth::user()->id;
           $cart->description = "";
           $cart->status = 1;
           $cart->sub_total = 0;
           $cart->discount = 0;
           $cart->total = 0;
         }

         $item = new CartItem;
         $item->product_id = $product->id;
         $item->price = $product->price;
         $item->cant = $request->input('cant');
         $item->sub_total = $product->price;
         $item->discount = 0;
         $item->total = $request->input('cant') * $product->price;

         $cart->sub_total += $item->total;
         $cart->total += $item->total - $cart->discount;

         $cart->save();
         $cart->items()->save($item);

         return redirect('cart');
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Cart  $cart
      * @return \Illuminate\Http\Response
      */
     public function show(Cart $cart)
     {
         //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Cart  $cart
      * @return \Illuminate\Http\Response
      */
     public function edit(Cart $cart)
     {
         //
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Cart  $cart
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, Cart $cart)
     {
         //
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Cart  $cart
      * @return \Illuminate\Http\Response
      */
     public function destroy(Cart $cart)
     {
         //
     }

     public function cartclose(Request $req){

       $cart = Cart::find($req->input('id'));

       $cart->status = 0;

       $cart->save();

       return redirect('/');
     }

     public function history(){
       $carts = Cart::where('user_id', Auth::user()->id)
                     ->orderBy('status')
                     ->get();

       return view('history', compact('carts'));
     }

     public function eliminarCarritoItem(Request $req) {

       $cart_item = CartItem::with('cart')->find($req->input('id'));

       $cart = $cart_item->cart;

       $cart->sub_total -= $cart_item->total;
       $cart->total = $cart->sub_total - $cart->discount;

       $cart_item->delete();

       $cart->save();

       return redirect('cart');
     }

 }
