<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attibutes = request()->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'personalNumber' => 'required|unique:users,personalNumber',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);

        $attibutes['password'] = bcrypt($attibutes['password']);

        $user = User::create($attibutes);

        Auth::login($user);

        return redirect('/')->with('success', 'account has been created');
    }
}
