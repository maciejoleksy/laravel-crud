<?php

namespace App\Contracts\Repositories;
use App\Models\Client;

interface ClientRepositoryInterface
{
    public function index();

    public function store(array $data);

    public function update(Client $client, array $data);
}
