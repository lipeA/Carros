<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('veiculos') }}
        </h2>
    </x-slot>

    <div class="w-full min-h-[700px] border flex justify-center items-center">
        <div class="w-4/5 bg-white p-8">

            <div class="border">
                <h2 class="font-semibold text-5xl p-10 mb-10 ">Informações do veiculo</h2>
            </div>

            <div class="mt-6 gap-4">
                <div class="mb-2">
                    <span class="font-semibold mr-4">ID:</span> {{ $carro->id }}
                </div>
                <div class="mb-2">
                    <span class="font-semibold mr-4">Modelo do veiculo:</span> {{ $carro->veiculo }}
                </div>
                <div class="mb-2">
                    <span class="font-semibold mr-4">Placa do veiculo:</span> {{ $carro->placa }}
                </div>
                <div class="mb-2">
                    <span class="font-semibold mr-4">Cor do veiculo:</span> {{ $carro->cor }}
                </div>
                <div class="mb-2">
                    <span class="font-semibold mr-4">Ano de fabricação do veiculo:</span> {{ $carro->ano }}
                </div>

            </div>

            <div class="flex justify-end mt-4">


                   <a
                   class="rounded-md bg-green-700 px-3 py-2  text-1xl font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
                   focus-visible:outline-indigo-600"
                    href=" {{route('veiculos.index')}}"> Voltar</a>

            </div>



        </div>

    </div>



</x-app-layout>
