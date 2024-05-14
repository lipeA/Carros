<?php

namespace App\Http\Controllers;

use App\Models\modelProprietario;

use Illuminate\Http\Request;

class controllerProprietario extends Controller
{
    public function index()
    {

        $donos = modelProprietario::orderBy('created_at', 'desc')->paginate(2);

        return view('proprietarios.index', ['donos' => $donos]);
    }


    public function show($id)
    {
        $dono = modelProprietario::find($id);



        return view('proprietarios.show', ['dono' =>$dono]);
    }


    public function create()
    {

        return view('proprietarios.create');
    }


    public function store(Request $request)
    {
        $novoDono = new modelProprietario;

        $novoDono->nome = $request->nome;
        $novoDono->telefone = $request->telefone;
        $novoDono->cnh = $request->cnh;
        $novoDono->sexo = $request->sexo;
        $novoDono->data_nascimento = $request->nascimento;

        $novoDono->save();

        return redirect()->route('donos.index')->with('sucess', 'Proprietario criado com sucesso!');
    }


    public function destroy($id)
    {
        $donodel = modelProprietario::find($id);

        $donodel->delete();

        return redirect()->route('donos.index')->with('sucess', 'proprietario apagado com sucesso!');
    }




    public function edit($id)
    {
        $dono = modelProprietario::find($id);

        return view('proprietarios.editar', ['dono' => $dono]);
    }



    public function atualizar( Request $request, $id )
    {
        $dono = modelProprietario::find($id);


        $dono ->update([
            'nome' => $request->nome,
            'telefone'=> $request->telefone,
            'cnh'=> $request->cnh,
            'sexo'=> $request->sexo,
            'data_nascimento'=> $request->nascimento
        ]);
        return redirect()->route('donos.index')->with('sucess', 'Proprietario atualizado com sucesso.');
    }
}
