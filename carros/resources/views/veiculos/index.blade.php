<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('veiculos') }}
        </h2>
    </x-slot>

    <div class="w-full min-h-[700px] border flex justify-center items-center">
        <div class="w-4/5 bg-white p-8">

            <div class="border">
                <h2 class="font-semibold text-5xl p-10 mb-10 ">Lista de Veiculos</h2>
            </div>

            <a href="{{ route('veiculos.create') }}"> <button class="bg-green-700 text-white p-2 rounded-md mt-10"> Cadastrar novo veiculo </button> </a><br>

            @forelse ($veiculos as $veiculo)
                <table class="table-fixed w-full  mt-10 ">

                    <thead class="mb-8 ">
                        <tr class="text-left ">
                            <th>Veiculo</th>
                            <th>Placa</th>
                            <th>Ano</th>
                            <th class="">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> {{ $veiculo->veiculo }} </td>
                            <td> {{ $veiculo->placa }} </td>
                            <td>1961</td>
                            <td>
                                <button class="bg-green-700 text-white p-2 rounded-md"> Visualizar </button>
                                <button class="bg-yellow-700 text-white p-2 rounded-md"> Editar </button>
                                <button class="bg-red-700 text-white p-2 rounded-md "> Excluir </button>

                            </td>
                        </tr>

                    </tbody>
                </table>






            @empty
                <span style="color: #f00;">Nenhuma veiculo encontrada!</span>
            @endforelse
        </div>

    </div>
</x-app-layout>
