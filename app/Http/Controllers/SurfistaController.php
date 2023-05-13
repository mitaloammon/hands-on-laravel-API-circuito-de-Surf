<?php

namespace App\Http\Controllers;

use App\Models\surfista;
use App\Http\Requests\StoresurfistaRequest;
use App\Http\Requests\UpdatesurfistaRequest;

class SurfistaController extends Controller
{

    public function index()
    {
        return surfista::with('ondas')->get();
    }

    public function create($request)
    {
        surfista::created($request->all());
    }

    public function store(StoresurfistaRequest $request)
    {
        return response(surfista::create($request->all()));
    }

    public function show(surfista $surfista)
    {
        return response(surfista::findOrFail($surfista));
    }

    public function update(UpdatesurfistaRequest $request, surfista $surfista)
    {
        return response(surfista::find($surfista)->save($request->all()));
    }

    public function destroy(surfista $surfista)
    {
        return response(surfista::whereId($surfista)->delete());
    }
}
