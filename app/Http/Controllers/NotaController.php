<?php

namespace App\Http\Controllers;

use App\Models\nota;
use App\Http\Requests\StorenotaRequest;
use App\Http\Requests\UpdatenotaRequest;

class NotaController extends Controller
{
    public function index()
    {
        return nota::with('onda')->get();
    }

    public function create($request)
    {
        nota::created($request->all());
    }

    public function store(StorenotaRequest $request)
    {
        return response(nota::create($request->all()));
    }

    public function show(nota $nota)
    {
        return nota::findOrFail($nota);
    }

    public function update(UpdatenotaRequest $request, nota $nota)
    {
        return response(nota::find($nota)->save($request->all()));
    }

    public function destroy(nota $nota)
    {
        return $nota = nota::findOrFail($nota);
        $nota->delete();
    }
}
