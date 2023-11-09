<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoRequest;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index(){

        $servicos = Servico::paginate(15);

        return view('servicos.index')->with('servicos', $servicos);
    }

    public function create(){

        return view('servicos.create');
    }

    public function store(ServicoRequest $request){

       $dados = $request->except('_token');

       Servico::create($dados);

       return redirect()->route('servicos.index')->with('mensagem', 'Serviço Criado com Sucesso!');
    }

    public function edit(Servico $servico){

        return view('servicos.edit')->with('servico', $servico);
    } 

    public function update(Servico $servico, ServicoRequest $request){

        $dados = $request->except(['_token', '_method'] );
 
        $servico->update($dados);
 
        return redirect()->route('servicos.index')->with('mensagem', 'Serviço Alterado com Sucesso!');
     }
}
