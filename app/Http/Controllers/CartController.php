<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $cartItems=Cart::content();
        return view('cart.index',compact('cartItems'));
    }

    public function create()
    {


    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function addItem($id)
    {
        $product=Product::find($id);

        Cart::add($id,$product->name,1,$product->price,['size'=>'medium']);

        return back();
    }

    public function update(Request $request, $id)
    {
        Cart::update($id,['qty'=>$request->qty,"options"=>['size'=>$request->size]]);
        return back();
    }

    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }
}
