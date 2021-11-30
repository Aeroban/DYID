<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Transaction;
use App\Models\User;
use GuzzleHttp\Promise\Create;
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

        $role = auth()->user()->role;
        if ($role == 0) {
            return view('carts.cart',$data);
        } else {
            return redirect('/');
        }
    }

    public function showEditCart(Request $request){
        $item_id = $request->id;
        $user_id = auth()->user()->id;

        $user_cart = User::find($user_id)->carts;
        $cart_item = $user_cart->products()->where('id','=',$item_id)->first();

        $role = auth()->user()->role;
        if ($role == 0) {
            return view('carts.edit_cart')->with('cart_item',$cart_item);
        } else {
            return redirect('/');
        }

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

        $role = auth()->user()->role;
        if ($role == 0) {
            return redirect('/cart');
        } else {
            return redirect('/');
        }
    }

    public function create($id){
        Cart::create([
            'user_id' => $id
        ]);
    }

    public function addToCart(Request $request){
        $item_id = $request->id;
        $user_id = auth()->user()->id;

        $rules=[
            'quantity' => 'required|numeric|min:1'
        ];
        $message=[
            'required|numeric' => 'Must be filled with a number',
            'min' => 'Quantity must be at least one'
        ];

        $this->validate($request, $rules, $message);

        $user_cart = User::find($user_id)->carts;
        $cart_item = $user_cart->products()->where('id','=',$item_id)->first();

        if($cart_item == null){
            $user_cart->products()->attach($item_id,['quantity' => $request->quantity]);
        }else{
            $cart_item->pivot->quantity = $cart_item->pivot->quantity + $request->quantity;
            $cart_item->pivot->save();
        }

        
        $role = auth()->user()->role;
        if ($role == 0) {
            return redirect('/cart');
        } else {
            return redirect('/');
        }
    }

    public function destroy(Request $request){

        $item_id = $request->id;
        $user_id = auth()->user()->id;
        $user_cart = User::find($user_id)->carts;

        $user_cart->products()->detach($item_id);

        $role = auth()->user()->role;
        if ($role == 0) {
            return redirect('/cart');
        } else {
            return redirect('/');
        }
    }

    public function confirm($id, $total){
        $cart_id = $id;
        $user_id =  auth()->user()->id;
        $newTotal = $total;
        
        $transaction_newpost = new Transaction;
        $transaction_newpost->id = $cart_id;
        $transaction_newpost->user_id = $user_id;
        $transaction_newpost->total_price = $newTotal;
        $transaction_newpost->save();
        
        $old_data = Cart::find($id);
        $old_data->delete();
        


        CartProduct::query()
        ->where('cart_id','=', $cart_id)
        ->each(function ($oldRecord) {
            $newPost = $oldRecord->replicate();
            $newPost ->setTable('transaction_products');
            $newPost ->save();

            $oldRecord->delete();
        });

        $role = auth()->user()->role;
        if ($role == 0) {
            return redirect('/cart');
        } else {
            return redirect('/');
        }

    }
    
}
