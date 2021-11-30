<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showHistory(){
        $user_id = auth()->user()->id;

        $user_history = User::find($user_id)->transactions;

        $holder = 0;

        $data=['user_history' => $user_history, 'holder' => $holder];
        
        return view('history',$data);
    }

}
