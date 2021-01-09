<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('seller.dashboard');
    }

    public function showProfile()
    {
        return view('seller.profile');
    }
}
