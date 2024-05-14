<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proprietario') }}
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
                <h2 class="font-semibold text-5xl p-10 mb-10 ">Lista de Proprietarios</h2>
            </div>

            <a href="{{ route('donos.create') }}"> <button class="bg-green-700 text-white p-2 rounded-md mt-10">
                    Cadastrar novo Proprietario  </button> </a><br>

            @foreach ($donos as $dono)
                <table class="table-fixed w-full  mt-10 ">

                    <thead class="mb-8 ">
                        <tr class="text-left ">
                            <th>Nome'</th>
                            <th>Telefone</th>
                            <th>CNH</th>
                            <th class="">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> {{ $dono->nome }} </td>
                            <td> {{ $dono->telefone }} </td>
                            <td> {{ $dono->cnh }} </td>

                            <td class="flex gap-4">
                                <a href=" {{ route('donos.show', ['id' => $dono->id]) }} ">
                                    <button class="bg-green-700 text-white p-2 rounded-md">
                                        Visualizar
                                    </button>
                                </a>

                                <a href=" {{ route('donos.editar', ['id' => $dono->id]) }} ">
                                    <button class="bg-yellow-700 text-white p-2 rounded-md"> Editar </button>
                                </a>

                                <form action=" {{ route('donos.destroy', ['id' => $dono->id]) }} "
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
               {{-- {{  $dono->links() }} --}}
           </div>

        </div>

    </div>
</x-app-layout>
