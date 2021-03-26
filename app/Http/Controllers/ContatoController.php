<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Contato::create([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'data_niver' => $request->data_niver,
        ]);
        return 'Contato salvo';
    }

    public function show(Contato $contato)
    {
        //
    }

    public function edit(Contato $contato)
    {
        //
    }

    public function update(Request $request, Contato $contato)
    {
        //
    }

    public function destroy(Contato $contato)
    {
        //
    }
}
