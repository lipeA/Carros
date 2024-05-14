<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Atualização de registro</title>
</head>

<body>
   
    <header class="bg-white w-full p-11 flex items-center justify-items-start gap-8 border-b-2">
        <a href="{{ route('veiculos.index') }}" class="no-underline bg-blue-900 text-white px-10 py-2  rounded-md ">
            Voltar
        </a>
        <h2 class="text-4xl">Cadastrar um veiculo</h2>
    </header>
    <main class=" flex justify-center items-center bg-[#F3F4F6] w-6/6 pt-16 ">
        <div class="">
            <form action=" {{ route('veiculo.atualizar', ['id' => $carro->id]) }} " method="POST">
                @csrf
                @method('PUT');
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Preencha as informações sobre o
                            dono veiculo</h2>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="modelo" class="block text-sm font-medium leading-6 text-gray-900">Informe
                                    o modelo do carro</label>
                                <div class="mt-2">
                                    <input type="text" name="modelo" id="modelo" maxlength="15"
                                        onkeyup="this.value = this.value.toUpperCase()" value="{{ $carro->veiculo }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="marca"
                                    class="block text-sm font-medium leading-6 text-gray-900">Selecione a marca do carro
                                </label>
                                <div class="mt-2">
                                    <select id="marca" name="marca"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option value="Aston Martin">Aston Martin</option>
                                        <option value="Audi">Audi</option>
                                        <option value="BMW">BMW</option>
                                        <option value="BYD">BYD</option>
                                        <option value="CAOA Chery">CAOA Chery</option>
                                        <option value="Chevrolet">Chevrolet</option>
                                        <option value="Citroën">Citroën</option>
                                        <option value="Effa">Effa</option>
                                        <option value="Ferrari">Ferrari</option>
                                        <option value="Fiat">Fiat</option>
                                        <option value="Ford">Ford</option>
                                        <option value="Foton">Foton</option>
                                        <option value="Haval">Haval</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Hyundai">Hyundai</option>
                                        <option value="Iveco">Iveco</option>
                                        <option value="JAC">JAC</option>
                                        <option value="Jaguar">Jaguar</option>
                                        <option value="Jeep">Jeep</option>
                                        <option value="Kia">Kia</option>
                                        <option value="Lamborghini">Lamborghini</option>
                                        <option value="Land Rover">Land Rover</option>
                                        <option value="Lexus">Lexus</option>
                                        <option value="Maserati">Maserati</option>
                                        <option value="McLaren">McLaren</option>
                                        <option value="Mercedes-AMG">Mercedes-AMG</option>
                                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                                        <option value="Mini">Mini</option>
                                        <option value="Mitsubishi">Mitsubishi</option>
                                        <option value="Nissan">Nissan</option>
                                        <option value="Ora">Ora</option>
                                        <option value="Peugeot">Peugeot</option>
                                        <option value="Porsche">Porsche</option>
                                        <option value="RAM">RAM</option>
                                        <option value="Renault">Renault</option>
                                        <option value="Rolls-Royce">Rolls-Royce</option>
                                        <option value="Seres">Seres</option>
                                        <option value="Subaru">Subaru</option>
                                        <option value="Suzuki">Suzuki</option>
                                        <option value="Toyota">Toyota</option>
                                        <option value="Volkswagen">Volkswagen</option>
                                        <option value="Volvo">Volvo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <label for="cor"
                                    class="block text-sm font-medium leading-6 text-gray-900">Selecione a cor do carro
                                </label>
                                <div class="mt-2">
                                    <select id="cor" name="cor"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option value="Branco">Branco</option>
                                        <option value="Prata">Prata</option>
                                        <option value="Cinza">Cinza</option>
                                        <option value="Preto">Preto</option>
                                        <option value="Azul">Azul</option>
                                        <option value="Vermelho">Vermelho</option>
                                        <option value="Marrom">Marrom</option>
                                        <option value="Verde">Verde</option>
                                        <option value="Amarelo">Amarelo</option>
                                        <option value="Laranja">Laranja</option>


                                    </select>
                                </div>
                            </div>




                            <div class="sm:col-span-3">
                                <label for="placa"
                                    class="block text-sm font-medium leading-6 text-gray-900">placa</label>
                                <div class="mt-2">
                                    <input id="placa" name="placa" type="text" maxlength="10"
                                        value="{{ $carro->placa }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <label for="ano" class="block text-sm font-medium leading-6 text-gray-900">Ano de
                                    fabricação</label>
                                <div class="mt-2">
                                    <input id="ano" name="ano" type="text" maxlength="4"
                                        value="{{ $carro->ano }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            {{-- <div class="col-span-full">
                                <label for="Proprietario"
                                    class="block text-sm font-medium leading-6 text-gray-900">Proprietario</label>
                                <div class="mt-2">
                                    <input type="text" name="Proprietario" id="Proprietario"
                                        autocomplete="Proprietario"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div> --}}



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
