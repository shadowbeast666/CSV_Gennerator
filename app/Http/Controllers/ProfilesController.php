<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ProfilesController extends Controller
{
    
    public function index($user){

        
        $user = User::find($user);
        dd($user);
        return view('home', ['user' => $user]);
    }




}
