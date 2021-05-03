<?php

namespace App\Repositories;

use App\Contracts\Repositories\ClientRepositoryInterface;
use App\Models\Client;

class ClientRepository implements ClientRepositoryInterface
{
    public function index()
    {
        return Client::latest()->paginate(5);
    }

    public function store(array $data)
    {
        return Client::create($data);
    }

    public function update(Client $client, array $data)
    {
        return $client->update($data);
    }
}
