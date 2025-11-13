<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $html = "<p>Hello again</p>";
        return view('client.pages.index', ['content' => $html]);
    }

    public function create()
    {
        return view('client.pages.create');
    }

    public function save(Request $request)
    {
        Client::query()->create($request->all());

        return redirect()->route('client.index');
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('client.pages.update', ['client' => $client]);
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->update($request->all());

        return redirect()->route('client.index');
    }
}
