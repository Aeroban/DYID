<?php

namespace App\Http\Controllers;

use App\Models\CartProduct;
use App\Models\User;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showCart(){
        $user_id = auth()->user()->id;

        $user_cart = User::find($user_id)->carts;

        $total_price = 0;

        foreach ($user_cart->products as $item) {
            $add_price = $item->pivot->quantity * $item->price;
            $total_price += $add_price;
        };

        $data=[
            'user_cart' => $user_cart,
            'total_price' => $total_price
        ];
        
        return view('carts.cart',$data);
    }

    public function showEditCart(Request $request){
        $item_id = $request->id;
        $user_id = auth()->user()->id;

        $user_cart = User::find($user_id)->carts;
        $cart_item = $user_cart->products()->where('id','=',$item_id)->first();

        return view('carts.edit_cart')->with('cart_item',$cart_item);
    }

    public function update(Request $request){
        //Validation
        $rules=[
            'quantity' => 'required|numeric|min:1'
        ];
        $message=[
            'required|numeric' => 'Must be filled with a number',
            'min' => 'Quantity must be at least one'
        ];

        $this->validate($request, $rules,$message);

        $item_id = $request->id;
        $user_id = auth()->user()->id;

        $user_cart = User::find($user_id)->carts;
        $cart_item = $user_cart->products()->where('id','=',$item_id)->first();

        $cart_item->pivot->quantity = $request->quantity;
        $cart_item->pivot->save();

        return redirect('/cart');
    }
}
