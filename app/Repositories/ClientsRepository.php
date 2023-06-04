<?php

namespace App\Repositories;

use App\Models\clients;

class ClientsRepository
{

    public static function postClient(array $data)
    {
        $client = new clients();
        $client->name = $data['name'];
        $client->cc_nit = $data['cc_nit'];
        $client->address = $data['address'];
        $client->department = $data['department'];
        $client->city = $data['city'];
        $client->email = $data['email'];
        $client->password = $data['password'];
        $client->save();
    }

    public static function getClients()
    {
        return clients::all();
    }
}
