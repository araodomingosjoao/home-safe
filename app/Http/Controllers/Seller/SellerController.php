<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $this->validate($request ,[
            'name' => ['required' , 'string'],
            'email' => ['required' , 'email'],
            'phone' => ['required' , 'string', 'min:5'],
        ]);

        $seller = array();
        $seller['name'] = $request->name;
        $seller['email'] = $request->email;
        $seller['phone'] = $request->phone;

        $update = Auth::user()->fill($seller);

        if($update->update()){
            return redirect()->back()->with(['Sucesso ao actualizar os dados']);
        }else{
            return redirect()->back()->with(['Erro ao atualizar os dados']);
        }

    }

    public function updatePassword(Request $request)
    {

        $this->validate($request ,[
            'old_password' => ['required' , 'string'],
            'password' => ['required', 'string', 'min:4','confirmed'],
        ]);

        if (!password_verify($request->old_password, Auth::user()->password)) {
            return redirect()->back()->with(['message' => 'A senha antiga não corresponde']);
        }


        $seller_password = array();
        $seller_password['password'] = Hash::make($request->password);

        $update = Auth::user()->fill($seller_password);

        if($update->update()){
            return redirect()->back()->with(['message' => 'Sucesso ao actualizar a senha']);
        }else{
            return redirect()->back()->with(['message' => 'Erro ao atualizar a senha']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
