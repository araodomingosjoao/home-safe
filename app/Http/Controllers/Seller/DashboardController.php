<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\House;
class DashboardController extends Controller
{
    public function index()
    {
        $n_house = Auth::user()->houses()->get()->count();

        return view('seller.dashboard', compact('n_house'));
    }

    public function showProfile()
    {
        return view('seller.profile');
    }
}
