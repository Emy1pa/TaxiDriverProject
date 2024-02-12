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
                // dd('admin');
           }else if($role == 'passager'){
            return view('passager.home');
                // dd('passager');
           } else if($role == 'chauffeur'){
            return view('chauffeur.home');
                // dd('chauffeur'); 
          }
        }
    }
}
