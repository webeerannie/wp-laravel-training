<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.pages.index');
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
}
