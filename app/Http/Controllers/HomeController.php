<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       
        if(Auth::id()){
            $role= auth()->user()->role;
            if($role == 'admin'){
                return view('admin.dashboard');
           }else if($role == 'passager'){
            return view('passager.home');
           } else if($role == 'chauffeur'){
            return view('chauffeur.home');
          }
        }
    }
}