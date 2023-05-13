<?php

namespace App\Http\Controllers;

use App\Models\bateria;
use App\Http\Requests\StorebateriaRequest;
use Illuminate\Support\Facades\DB;

class BateriaController extends Controller
{
    public function index()
    {
        return bateria::with('ondas')->get();
    }

    public function store(StorebateriaRequest $request)
    {
        return response(bateria::create($request->all()));
    }

    public function show(bateria $bateria)
    {
        return response(bateria::findOrFail($bateria));
    }

    public function vencedor($id)
    {
        $media = DB::table('baterias')
            ->join('ondas', 'baterias.id', 'ondas.bateria')
            ->leftJoin('notas', 'ondas.id', 'notas.id')
            ->leftJoin('surfistas', 'ondas.surfista', 'surfistas.numero')
            ->select('pais', 'nome', DB::raw('(notaParcial1+notaParcial2+notaParcial3) / 3 as nota'))
            ->where('baterias.id', $id)
            ->orderBy('nota', 'desc')
            ->first();

        return response()->json($media);
    }
}
