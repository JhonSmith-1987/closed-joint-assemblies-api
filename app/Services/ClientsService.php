<?php

namespace App\Services;

use App\Repositories\ClientsRepository;

class ClientsService
{

    public static function postClient(array $data)
    {
        ClientsRepository::postClient($data);
        return json_encode(['message'=>'Cliente creado satisfactoriamente']);
    }

    public static function getClients()
    {
        return ClientsRepository::getClients();
    }
}
