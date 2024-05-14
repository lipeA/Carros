<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\modelProprietario;

use App\Models\modelVeiculos;

use App\Models\modelServico;

class controllerDashboard extends Controller
{
    public function index()
    {
        $veiculosCount = modelVeiculos::count();
        $proprietariosCount = modelProprietario::count();
        $servicosCount = modelServico::count();

        $servicosPorMes = modelServico::selectRaw('MONTH(data_servico) as mes, COUNT(*) as total')
            ->groupBy('mes')
            ->pluck('total', 'mes')
            ->toArray();

        $sexoProprietarios = modelProprietario::selectRaw('sexo, COUNT(*) as total')
            ->groupBy('sexo')
            ->pluck('total', 'sexo')
            ->toArray();

        $servicosPorAno = modelServico::selectRaw('YEAR(data_servico) as ano, COUNT(*) as total')
            ->groupBy('ano')
            ->pluck('total', 'ano')
            ->toArray();

        $veiculosPorTipo = modelVeiculos::selectRaw('veiculo, COUNT(*) as total')
            ->groupBy('veiculo')
            ->pluck('total', 'veiculo')
            ->toArray();

        return view('dashboard', compact('veiculosCount', 'proprietariosCount', 'servicosCount', 'servicosPorMes', 'sexoProprietarios', 'servicosPorAno', 'veiculosPorTipo'));
    }
}
