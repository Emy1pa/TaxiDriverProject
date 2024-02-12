<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;

class SessionController extends Controller
{
    public function store(LoginRequest $request){
        $request->authenticate();

        $request->session()->regenerate();

        return redirect('/home');
    }
}
