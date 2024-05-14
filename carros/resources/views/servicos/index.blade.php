<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Serviços') }}
        </h2>
    </x-slot>

    <div class="w-full min-h-[700px] border flex justify-center items-center">
        <div class="w-4/5 bg-white p-8">

            @if (session('sucess'))
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        Swal.fire('Pronto', " {{ session('sucess') }}", 'sucess');
                    })
                </script>
            @endif



            <div class="border">
                <h2 class="font-semibold text-5xl p-10 mb-10 ">Lista de Serviços</h2>
            </div>

            <a href="{{ route('servicos.create') }}"> <button class="bg-green-700 text-white p-2 rounded-md mt-10">
                    Cadastrar novo veiculo </button> </a><br>

            @foreach ($servicos as $servico)
                <table class="table-fixed w-full  mt-10 ">

                    <thead class="mb-8 ">
                        <tr class="text-left ">
                            <th>ID</th>
                            <th>Veículo</th>
                            <th>Proprietário</th>
                            <th>Descrição</th>
                            <th>Data do Serviço</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $servico->id }}</td>
                            <td>{{ $servico->veiculo->veiculo }}</td>
                            <td>{{ $servico->proprietario->nome }}</td>
                            <td>{{ $servico->descricao }}</td>
                            <td>{{ $servico->data_servico }}</td>

                            <td class="flex gap-4">
                                <a href=" {{ route('servicos.show', ['id' => $servico->id]) }} ">
                                    <button class="bg-green-700 text-white p-2 rounded-md">
                                        Visualizar
                                    </button>
                                </a>

                                <a href=" {{ route('servicos.edit', ['id' => $servico->id]) }} ">
                                    <button class="bg-yellow-700 text-white p-2 rounded-md"> Editar </button>
                                </a>

                                <form action=" {{ route('servicos.destroy', ['id' => $servico->id]) }} "
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
            @endforeach

            </tbody>
            </table>




            <div class="mt-14">
                {{-- {{ $servico->links() }} --}}
            </div>

        </div>

    </div>



</x-app-layout>
