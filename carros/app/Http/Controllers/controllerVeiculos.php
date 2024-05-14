<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\modelVeiculos;
use LDAP\Result;

class controllerVeiculos extends Controller
{

    public function index()
    {
        $veiculos = modelVeiculos::orderBy('created_at', 'desc')->paginate(2);

        return view('veiculos.index', ['veiculos' => $veiculos]);
    }


    public function show($id)
    {
       $carro = modelVeiculos::find($id);



        return view('veiculos.show', ['carro' =>$carro]);
    }


    public function create()
    {
        return view('veiculos.create');
    }


    public function store(Request $request)
    {

           $modelveiculos = new modelVeiculos;
            $modelveiculos->veiculo = $request->modelo;
            $modelveiculos->placa = $request->placa;
            $modelveiculos->cor = $request->cor;
            $modelveiculos->ano = $request->ano;


            $modelveiculos->save();


        return redirect()->route('veiculos.index')->with('sucess', 'veiculo criado com sucesso!');


    }


    public function destroy($id){

        $carrodel = modelVeiculos::find($id);

        $carrodel->delete();

        return redirect()->route('veiculos.index')->with('sucess', 'veiculo apagado com sucesso!');

    }


    public function edit($id){

        $carro = modelVeiculos::find($id);

        return view('veiculos.editar', ['carro' =>$carro]);
    }

    public function atualizar( Request $request ,$id){

        $carro = modelVeiculos::find($id);

       $carro->update([

        'veiculo' => $request->modelo,
        'placa' => $request->placa,
        'cor' => $request->cor,
        'ano' => $request->ano,

       ]);

       return redirect()->route('veiculos.index')->with('sucess', 'Veículo atualizado com sucesso.');
    }











}
