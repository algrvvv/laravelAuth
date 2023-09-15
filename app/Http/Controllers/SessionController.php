<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect()->route('home')->with('success', 'Всего доброго!');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($attributes)) {
            return back()->withErrors([
                'email' => 'This email could not be verified'
            ]);
        }
        
        session()->regenerate();
        return redirect()->route('home')->with('success', 'Welcome back!');
    }

    public function create()
    {
        return view('login.login');
    }
}
