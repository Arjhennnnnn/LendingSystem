<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class LoanController extends Controller
{
    public function index(){

       $users = Loan::with('user')->where('user_id','!=',Auth::user()->id)->get();
       return view('user.userhome',[
        'users' => $users
       ]);

    }

    public function store(Request $request){
        $attributes = $request->validate([
            'min_amount' => 'required',
            'max_amount' => 'required',
            'description' => 'required',
        ]);
        $attributes['user_id'] = Auth::user()->id;
       Loan::create($attributes);
       return back();

    }
}
