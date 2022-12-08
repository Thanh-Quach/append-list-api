<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;


class ClientController extends Controller
{
    public function index()
    {
        //list all users
       if(!Controller::tokenValidate()){
            return response()->json(['error' => 'Unauthorize'], 401);
        };
        $clients = Client::all();
        return $clients;
    }
}
