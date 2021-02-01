<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\House;
use App\Models\Cropper;

class SiteController extends Controller
{
    public function index()
    {
        $houses = House::all();
        return view('site.home', compact('houses'));
    }
    public function buy()
    {
        $houses_buy = House::where('status','Venda')->get();
        return view('site.buy', compact('houses_buy'));
    }
    public function rent()
    {
        $houses_rent = House::where('status','Alugel')->get();
        return view('site.rent', compact('houses_rent'));
    }
    public function contact()
    {
        return view('site.contact');
    }
    public function description($id)
    {
        $house = House::findOrFail($id);
        return view('site.property-details', compact('house'));
    }
    public function list()
    {
        return view('site.view-list');
    }
    public function about()
    {
        return view('site.about');
    }
}
