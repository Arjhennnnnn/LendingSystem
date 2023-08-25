<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Lender;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class LenderController extends Controller
{

    public function process(Request $request){
        $validate = $request -> validate([
            "email" => ['required'],
            "password" => 'required',
        ]);
        if(auth()->attempt($validate)){
            $request->session()->regenerate();
            return redirect('/home')->with('message','Welcome Back');
        }
        throw ValidationException::withMessages([
            'email' => 'Invalid Credentials'
        ]);
    }

    public function store(Request $request){
        $attributes = $request->validate([
            'name' => 'required',
            'email' => ['required','email',Rule::unique('users','email')],
            'password' => 'required|confirmed|min:8',
            'address' => 'required',
            'phone' => 'required',
        ]);
        $attributes['lock'] = 1;

        Lender::create($attributes);
        return back()->with('message','Created Successfully');
    }
}
