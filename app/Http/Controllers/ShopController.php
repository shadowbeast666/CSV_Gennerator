<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /*
        public function scopeShopNumberFilter($query, $filters)
    {
        return $query->whereHas('number', function ($query) use ($filters) {
                $query->where('type', $filters['type']);
        });
    }
    public function scopeNicknameFilter($query, $nickname)
    {
        return $query->whereHas('user_nick_name', function ($query) use ($searchTerm) {
            $query->where('custom_title', 'like', '%'.$nickname.'%');
        });
    }
        public function index()
        {
            $data = Shop::all();

            return view('shop', compact('data'));
        }
        */
}
