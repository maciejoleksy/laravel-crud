<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\ClientRepositoryInterface;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;
use App\Models\Client;

class ClientController extends Controller
{
    private $clientRepository;

    public function __construct(
        ClientRepositoryInterface $clientRepository
    ) {
        $this->clientRepository = $clientRepository;
    }

    public function index()
    {
        $clients = $this->clientRepository->index();

        return view('index', [
            'clients' => $clients,
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(StoreRequest $request)
    {
        $this->clientRepository->store(
            $request->only(
                'first_name',
                'last_name',
            )
        );

        return redirect()->route('index')
            ->with('success', 'Client added successyfully.');
    }

    public function edit(Client $client)
    {
        return view('edit', [
            'client' => $client,
        ]);
    }

    public function update(UpdateRequest $request, Client $client)
    {
        $this->clientRepository->update(
            $client,
            $request->only(
                'first_name',
                'last_name',
            )
        );

        return redirect()->route('index')
            ->with('success', 'Client edited successyfully.');
    }

    public function delete(Client $client)
    {
        $client->delete();

        return redirect()->route('index')
            ->with('success', 'Client deleted successyfully.');
    }
}
