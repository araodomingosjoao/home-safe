<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.home');
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
