<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function destroy(){
        auth()->logout();
        return redirect()->route('home')->with('success', 'Всего доброго!');
    }   
}