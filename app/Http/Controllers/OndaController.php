<?php

namespace App\Http\Controllers;

use App\Models\onda;
use App\Http\Requests\StoreondaRequest;
use App\Http\Requests\UpdateondaRequest;

class OndaController extends Controller
{
    public function index()
    {
        return onda::with('baterias', 'surfista')->get();
    }

    public function create($request)
    {
        onda::created($request->all());
    }

    public function store(StoreondaRequest $request)
    {
        return response(onda::create($request->all()));
    }

    public function show(onda $onda)
    {
        return response(onda::findOrFail($onda));
    }

    public function edit(onda $onda)
    {
        return onda::findOrFail($onda);
    }

    public function update(UpdateondaRequest $request, onda $onda)
    {
        return response(onda::find($onda)->save($request->all()));
    }

    public function destroy(onda $onda)
    {
        return $onda = onda::findOrFail($onda);
        $onda->delete();
    }
}
