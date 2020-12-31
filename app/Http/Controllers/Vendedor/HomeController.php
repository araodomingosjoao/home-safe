<?php

namespace App\Http\Controllers\Vendedor;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Houses;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Vendedor/home');
    }

    public function update(Request $request )
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:50' , 'min:10'],
            'email' => ['required', 'string', 'unique:users'],
            'telefone' => ['required', 'string', 'unique:users', 'min:9']
        ]);
    }
}
