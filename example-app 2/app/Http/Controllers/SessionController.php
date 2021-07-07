<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function destroy()
    {
        Auth::logout();

        return redirect('/')->with('success', 'you have logged out');
    }

    public function store()
    {
        $attirbutes = request()->validate([
            'email' =>'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($attirbutes)){
            return redirect('/')->with('success', 'you logged in');
        }

        return back()
            ->withInput()
            ->withErrors(['email'=>'credintials could not be verified']);
    }

    public function create()
    {
        return view('sessions.create');
    }
}
