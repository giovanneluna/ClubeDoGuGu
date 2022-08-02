<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientsStoreRequest;
use App\Http\Requests\ClientUpdateRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->search;
        $clients = Client::where(function ($query) use ($search) {
            if ($search) {
                $query->where('email', $search);
                $query->orWhere('name', 'LIKE', "%{$search}%");
                $query->orWhere('email', 'LIKE', "%{$search}%");
                $query->orWhere('address', 'LIKE', "%{$search}%");
                $query->orWhere('telephone', 'LIKE', "%{$search}%");
                $query->orWhere('cpf', 'LIKE', "%{$search}%");
            }
        })->paginate(2);

        return view('client.index', compact('clients'),);
    }

    public function create()
    {
        $clients = Client::all();
        return view('client.create', compact('clients'));
    }

    public function store(ClientsStoreRequest $request)
    {
        Client::create($request->all());
        return redirect()->route('clients.index');
    }

    public function show($id)
    {
        return redirect()->route('clients.index');
    }

    public function edit($id)
    {
        if (!$client = Client::find($id))
            return redirect()->route('clients.index');

        return view('client.edit', compact('client'));
    }

    public function update(ClientUpdateRequest $request, Client $client)
    {
        $client->update($request->validated());
        return redirect()->route('clients.index');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
