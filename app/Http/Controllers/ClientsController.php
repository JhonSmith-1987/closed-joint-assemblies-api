<?php

namespace App\Http\Controllers;

use App\Services\ClientsService;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function postClient(Request $request)
    {
        $data = $request->all();
        return ClientsService::postClient($data);
    }
    public function getClients()
    {
        return ClientsService::getClients();
    }

}
