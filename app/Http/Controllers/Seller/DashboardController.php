<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\House;
use App\Notification;
class DashboardController extends Controller
{
    public function index()
    {
        $n_house = Auth::user()->houses()->get()->count();

        $is_notifications = Notification::get()->count();
        $notifications = Notification::orderBy('id', 'desc')->find(Auth::user()->houses);
        foreach ($notifications as $notification) {
            $id_house_notification = $notification->house_id;
            $house = House::find($id_house_notification);
        }

        return view('seller.dashboard', compact('house', 'n_house', 'notifications', 'is_notifications'));
    }

    public function showProfile()
    {
        return view('seller.profile');
    }
}
