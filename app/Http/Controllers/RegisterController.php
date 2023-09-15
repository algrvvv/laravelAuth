<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name'     => 'required|alpha|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email'    => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|max:255',
        ]);

        $user = User::create($attributes);

        // log the user in
        auth()->login($user);

        return redirect()->route('home')->with('success', 'Регистрация прошла успешно');
    }
}