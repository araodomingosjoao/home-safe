<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Client;
use App\Notification;

class ClientController extends Controller
{
    public function store(Request $request)
    {
      $client = new Client();
      $client->name = $request->client_name;
      $client->email = $request->client_email;
      $client->phone = $request->client_phone;
      $client->message = $request->client_message;

      if($client->save()){

        Notification::create([
            'house_id' => $request->house_id,
            'client_id' => $client->id,
        ]);

        return redirect()->back();
      }
    }
}
