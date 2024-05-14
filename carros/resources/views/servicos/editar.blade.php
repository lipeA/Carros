<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('veiculos') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Criação de serviço</title>
    </head>

    <body>
        <header class="bg-white w-full p-11 flex items-center justify-items-start gap-8 border-b-2">
            <a href="{{ route('veiculos.index') }}" class="no-underline bg-blue-900 text-white px-10 py-2  rounded-md ">
                Voltar
            </a>
            <h2 class="text-4xl">Cadastrar um Serviço</h2>
        </header>
        <main class=" flex justify-center items-center bg-[#F3F4F6] w-6/6 pt-16 ">
            <div class="">
                <form action=" {{ route('servicos.update', $servico->id) }} " method="POST">
                    @csrf
                    @method('PUT')
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Preencha as informações sobre o
                                serviço</h2>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-6">
                                    <label for="descricao"
                                        class="block text-sm font-medium leading-6 text-gray-900">Descrição do
                                        serviço</label>
                                    <div class="mt-2">
                                        <input type="text" name="descricao" id="descricao" maxlength="20" required value=" {{ $servico->descricao }} "
                                            onkeyup="this.value = this.value.toUpperCase()"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="veiculo_id"
                                        class="block text-sm font-medium leading-6 text-gray-900">Selecione Veiculo:
                                    </label>
                                    <div class="mt-2">
                                        <select id="veiculo_id" name="veiculo_id" required
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            @foreach ($veiculos as $veiculo)
                                                <option value="{{ $veiculo->id }}">{{ $veiculo->veiculo }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="proprietario_id"
                                        class="block text-sm font-medium leading-6 text-gray-900">Selecione o
                                        Proprietario </label>
                                    <div class="mt-2">
                                        <select id="proprietario_id" name="proprietario_id" required
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            @foreach ($proprietarios as $proprietario)

                                                 <option value="{{ $proprietario->id }}">{{ $proprietario->nome }}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                </div>


                                <div class="sm:col-span-3">
                                    <label for="data_servico" class="block text-sm font-medium leading-6 text-gray-900">data do serviço</label>
                                    <div class="mt-2">
                                        <input id="data_servico" name="data_servico" type="date" required
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="mt-6 mb-10 flex items-center justify-end gap-x-6">
                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900"> <a
                                href=" {{ route('veiculos.index') }} ">Cancel</a></button>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>

            </div>

        </main>



    </body>

    </html>




</x-app-layout>
