<?php

namespace App\Http\Controllers;

use App\Models\modelProprietario;
use App\Models\modelServico;
use App\Models\modelVeiculos;
use Illuminate\Http\Request;

class controllerServicos extends Controller
{

    // GET /servicos - Listar todos os serviços
    public function index()
    {
        $servicos = modelServico::with(['veiculo', 'proprietario'])->get();
        return view('servicos.index', compact('servicos'));
    }

    // GET /servicos/create - Formulário para criar um novo serviço
    public function create()
    {
        $veiculos = modelVeiculos::all();
        $proprietarios = modelProprietario::all();
        return view('servicos.create', compact('veiculos', 'proprietarios'));
    }

    // POST /servicos - Armazenar um novo serviço
    public function store(Request $request)
    {


        $servico = new modelServico;

        $servico->veiculo_id = $request->veiculo_id;
        $servico->proprietario_id = $request->proprietario_id;
        $servico->descricao = $request->descricao;
        $servico->data_servico = $request->data_servico;

        $servico->save();

        return redirect()->route('servicos.index')->with('sucess', 'Serviço criado com sucesso.');
    }

    // GET /servicos/{id} - Mostrar um serviço específico
    public function show($id)
    {
        $servico = modelServico::with(['veiculo', 'proprietario'])->findOrFail($id);
        return view('servicos.show', compact('servico'));
    }

    // GET /servicos/{id}/edit - Formulário para editar um serviço
    public function edit($id)
    {
        $servico = modelServico::findOrFail($id);
        $veiculos = modelVeiculos::all();
        $proprietarios = modelProprietario::all();
        return view('servicos.editar', compact('servico', 'veiculos', 'proprietarios'));
    }

    // PUT /servicos/{id} - Atualizar um serviço
    public function update(Request $request, $id)
    {
        $request->validate([
            'veiculo_id' => 'required|exists:veiculos,id',
            'proprietario_id' => 'required|exists:proprietarios,id',
            'descricao' => 'required|string|max:255',
            'data_servico' => 'required|date'
        ]);

        $servico = modelServico::findOrFail($id);
        $servico->update($request->all());

        return redirect()->route('servicos.index')->with('sucess', 'Serviço atualizado com sucesso.');
    }

    // DELETE /servicos/{id} - Deletar um serviço
    public function destroy($id)
    {
        $servico = modelServico::findOrFail($id);
        $servico->delete();

        return redirect()->route('servicos.index')->with('sucess', 'Serviço excluído com sucesso.');
    }

}
