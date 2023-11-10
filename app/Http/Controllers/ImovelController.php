<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImovelRequest;
use App\Models\Imovel;
use App\Models\Tipo;
use Illuminate\Http\Request;

class ImovelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $imovels = Imovel::paginate(15);

        return view('imovels.index')->with('imovels', $imovels);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dados["tipos"] = Tipo::get();
        return view('imovels.create', $dados);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ImovelRequest $request)
    {
        $dados = $request->except('_token');

       Imovel::create($dados);

       return redirect()->route('imovels.index')->with('mensagem', 'Imóvel Criado com Sucesso!');
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
