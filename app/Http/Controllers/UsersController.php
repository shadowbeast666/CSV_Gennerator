<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use app\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $all_data_users = User::all();

        return view('users', compact('all_data_users'));
    }

    
    


















}
