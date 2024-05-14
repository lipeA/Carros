<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('veiculos') }}
        </h2>
    </x-slot>



    <div class="w-full min-h-[700px] border flex justify-center items-center">
        <div class="w-4/5 bg-white p-8">

            @if (session('sucess'))
                <p class="bg-green-700 text-white text-2xl py-4 pl-4  mt-4 mb-4">
                    {{ session('sucess') }}
                </p>
            @endif

            <div class="border">
                <h2 class="font-semibold text-5xl p-10 mb-10 ">Lista de Veiculos</h2>
            </div>

            <a href="{{ route('veiculos.create') }}"> <button class="bg-green-700 text-white p-2 rounded-md mt-10">
                    Cadastrar novo veiculo </button> </a><br>

            @forelse ($veiculos as $veiculo)
                <table class="table-fixed w-full  mt-10 ">

                    <thead class="mb-8 ">
                        <tr class="text-left ">
                            <th>Veiculo</th>
                            <th>Placa</th>
                            <th>Ano</th>
                            <th>Proprietario</th>
                            <th class="">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> {{ $veiculo->veiculo }} </td>
                            <td> {{ $veiculo->placa }} </td>
                            <td> {{ $veiculo->cor }} </td>
                            <td>felipe</td>

                            <td class="flex gap-4">
                                <a href=" {{ route('veiculos.show', ['id' => $veiculo->id]) }} ">
                                    <button class="bg-green-700 text-white p-2 rounded-md">
                                        Visualizar
                                    </button>
                                </a>

                                <a href=" {{route('veiculos.editar', ['id'=> $veiculo->id])}} ">
                                    <button class="bg-yellow-700 text-white p-2 rounded-md"> Editar </button>
                                </a>

                                <form action=" {{ route('veiculos.derstroy', ['id' => $veiculo->id]) }} "
                                    method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="bg-red-700 text-white p-2 rounded-md"
                                        onclick="return confirm('Tem certeza que queira apagar esse registro?')">
                                        Apagar
                                    </button>
                                </form>

                            </td>
                        </tr>

                    </tbody>
                </table>






            @empty
                <span class="text-red-700 text-xl mt-5">Nenhum veiculo encontrado!</span>
            @endforelse
        </div>

    </div>
</x-app-layout>
