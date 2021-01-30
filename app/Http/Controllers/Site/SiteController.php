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
        $cropper = new Cropper('../storage/app/public/cache/house_images/'. Auth::user()->name);
        return view('site.home', compact('houses', 'cropper'));
    }
    public function buy()
    {
        return view('site.buy');
    }
    public function contact()
    {
        return view('site.contact');
    }
    public function description()
    {
        return view('site.property-details');
    }
    public function rent()
    {
        return view('site.rent');
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
