<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    public function index()
{
    $chamados = Chamado::all();
    return view('chamados.index', compact('chamados'));
}

public function create()
{
    return view('chamados.create');
}

public function store(Request $request)
{
    Chamado::create($request->all());
    return redirect()->route('chamados.index');
}

public function edit($id)
{
    $chamado = Chamado::find($id);
    return view('chamados.edit', compact('chamado'));
}

public function update(Request $request, $id)
{
    $chamado = Chamado::find($id);
    $chamado->update($request->all());

    return redirect()->route('chamados.index');


}

public function destroy($id)
{
    Chamado::destroy($id);
    return redirect()->route('chamados.index');
}

}
