<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class UsersController extends Controller
{
    public function find($user)
    {
        User::find($user);

        return view('/home');


    }
}
