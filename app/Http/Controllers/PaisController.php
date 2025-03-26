<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaisController extends Controller
{

    public function index()
    {
        $paises = DB::table('tb_pais')->orderBy('pais_nomb')->get();
        return view('pais.index', ['paises' => $paises]);
    }

    public function create()
    {
        return view('pais.new');
    }

    public function store(Request $request)
    {
        $pais = new Pais();
        $pais->pais_codi = strtoupper(substr($request->name, 0, 3)); // Solo 3 caracteres
        $pais->pais_nomb = $request->name;
        $pais->pais_capi = $request->capital ?? rand(1000, 9999); // Asignar valor por defecto
        $pais->save();

        return redirect()->route('paises.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
