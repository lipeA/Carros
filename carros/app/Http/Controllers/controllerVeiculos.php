<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\modelVeiculos;

class controllerVeiculos extends Controller
{

    public function index()
    {
        $veiculos = modelVeiculos::all();

        return view('veiculos.index', ['veiculos' => $veiculos]);
    }


    public function store(Request $request)
    {

        $veiculoCad = modelVeiculos::created($request->all());

        return redirect('veiculos.show')->with('sucesso', 'veiculo cadastrado com sucesso.!');
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
