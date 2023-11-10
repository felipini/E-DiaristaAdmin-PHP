<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoRequest;
use App\Models\Tipo;

class TipoController extends Controller
{
    public function index(){

        $tipos = Tipo::paginate(15);

        return view('tipos.index')->with('tipos', $tipos);
    }

    public function create(){

        return view('tipos.create');
    }

    public function store(TipoRequest $request){

       $dados = $request->except('_token');

       Tipo::create($dados);

       return redirect()->route('tipos.index')->with('mensagem', 'Tipo de Imóvel Criado com Sucesso!');
    }

    public function edit(Tipo $tipo){

        return view('tipos.edit')->with('tipo', $tipo);
    } 

    public function update(Tipo $tipo, TipoRequest $request){

        $dados = $request->except(['_token', '_method'] );
 
        $tipo->update($dados);
 
        return redirect()->route('tipos.index')->with('mensagem', 'Tipo de Imóvel Alterado com Sucesso!');
     }

         /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipo $tipo)
    {
        $tipo->delete();

        return redirect()->route('tipos.index')->with('mensagem', 'Tipo Imóvel Exluído com Sucesso!');
    }
}
