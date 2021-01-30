<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\House;
use App\HouseImage;
use App\User;
use App\Models\Cropper;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $houses = $user->houses()->get();

        return view('seller.house.index', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.house.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'location' => ['required', 'string'],
            'description' => ['required', 'string'],
            'type_house' => ['required', 'string'],
            'status_house' => ['required', 'string'],
            'images' => ['required']
            ]);

        $house = new House();
        $house->user_id = Auth::user()->id;
        $house->location = $request->location;
        $house->price_sale = $request->price_sale;
        $house->price_rent = $request->price_rent;
        $house->type = $request->type_house;
        $house->status = $request->status_house;
        $house->description = $request->description;

        if($house->save()){
            for ($i=0; $i < count($request->allFiles()['images']); $i++) {
                $file = $request->allFiles()['images'][$i];
                $houseImages = new HouseImage();
                $houseImages->house_id = $house->id;
                $houseImages->path = $file->store('house_images\\'. Auth::user()->name .'\\'. $house->id);
                $houseImages->save();
                unset($houseImages);
            }

            return redirect()->route('seller.house')->with(['message' => 'Sucesso ao Cadastrar']);
        }else{
            return redirect()->back()->with(['message' => 'Erro ao Cadastro']);
        }
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
    public function edit(House $house)
    {
        return view("seller.house.edit", compact('house'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'location' => ['required', 'string'],
            'price_sale' => ['required', 'string'],
            'price_rent' => ['required', 'string'],
        ]);

        $house = House::findOrFail($id);
        $update = $house->fill($request->all());

        if($update->update()){
            if(! $request->allFiles() == null){
                for ($i=0; $i < count($request->allFiles()['images']); $i++) {
                    $file = $request->allFiles()['images'][$i];
                    $houseImages = new HouseImage();
                    $houseImages->house_id = $house->id;
                    $houseImages->path = $file->store('house_images' .DIRECTORY_SEPARATOR. Auth::user()->name. DIRECTORY_SEPARATOR. $house->id);
                    $houseImages->save();
                    unset($houseImages);
                }
            }
            return redirect()->back()->with(['message' => 'Dados da casa actualizado com sucesso']);
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

    }

    public function destroyImage(HouseImage $image)
    {
        $cropper = new Cropper('../storage/');
        $cropper->flush($image->path);

        if($image->delete()){
            return redirect()->back();
        }
    }
}
