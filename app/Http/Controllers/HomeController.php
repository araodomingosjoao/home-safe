<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Houses;

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
        return view('sale/home');
    }
    public function create(Request $request)
    {
        $this->validate($request , [
            'localizacao', ['requerid', 'string'],
            'preco_venda', ['requerid', 'string'],
            'preco_alugel', ['requerid', 'string'],
            'detalhes', ['requerid', 'text'],
        ]);

        $credentials = [
            'user_id' => Auth::user()->id,
            'localização' => $request->localizacao,
            'preçoVenda' => $request->preco_venda,
            'preçoAlugel' => $request->preco_alugel,
            'detalhes' => $request->detalhes
        ];

        if(Houses::create($credentials)){
            return redirect()->back();
        }

    }
}
