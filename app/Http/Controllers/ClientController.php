<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birthdate' => 'required|date_format:Y-m-d',
            'address' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $client = Client::create($data);

        return redirect()->route('clients.index')
            ->with('success', 'Client created successfully.');
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birthdate' => 'required|date_format:Y-m-d',
            'address' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $client->update($data);

        return redirect()->route('clients.index')
            ->with('success', 'Client updated successfully.');
    }

    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')
            ->with('success', 'Client deleted successfully.');
    }
}
