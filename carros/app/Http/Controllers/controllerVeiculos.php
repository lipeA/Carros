<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\modelVeiculos;
use LDAP\Result;

class controllerVeiculos extends Controller
{

    public function index()
    {
        $veiculos = modelVeiculos::orderBy('created_at', 'desc')->get();

        return view('veiculos.index', ['veiculos' => $veiculos]);
    }


    public function store(Request $request)
    {

           $modelveiculos = new modelVeiculos;

            $modelveiculos->veiculo = $request->modelo;
            $modelveiculos->placa = $request->placa;
            $modelveiculos->cor = $request->cor;
            $modelveiculos->ano = $request->ano;


            $modelveiculos->save();


        return redirect()->route('veiculos.index');

    }



    public function create()
    {
        return view('veiculos.create');
    }




    public function show()
    {

        return view('veiculos.show');
    }









}
