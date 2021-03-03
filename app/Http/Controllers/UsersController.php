<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use app\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $data = User::all();

        return view('shop', compact('data'));
    }

    }
}
