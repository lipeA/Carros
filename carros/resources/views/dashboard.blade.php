<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
        <div class="flex justify-center items-center text-4xl mt-10 ">
            <h2>Estatísticas Gerais</h2>
        </div>
        <div class="flex justify-center items-center gap-10 mt-11">
            <p> Total de Veículos: {{ $veiculosCount }}</p>
            <p>Serviços: {{ $servicosCount }}</p>
        </div>
    </div>

    <div class=" w-full flex  p-10  gap-28  max-md:block  ">
        <div class="w-[600px] mt-4">
            <h2>Serviços por Mês</h2>
            <canvas class="w-[300px]" id="servicosPorMesChart"></canvas>
        </div>

        <div  class="w-[600px] mt-4 ">
            <h2>Serviços ao Longo do Tempo</h2>
            <canvas id="servicosPorAnoChart"></canvas>
        </div>

        <div  class="w-[400px] mt-4 ">
            <h2>Veículos por Tipo</h2>
            <canvas id="veiculosPorTipoChart"></canvas>
        </div>

        <div  class="w-[400px] mt-4 ">
            <h2>Sexo dos Proprietários</h2>
            <canvas id="sexoProprietariosChart"></canvas>
        </div>

    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var servicosCtx = document.getElementById('servicosPorMesChart').getContext('2d');
            var servicosPorMesChart = new Chart(servicosCtx, {
                type: 'bar',
                data: {
                    labels: {!! json_encode(array_keys($servicosPorMes)) !!},
                    datasets: [{
                        label: 'Serviços',
                        data: {!! json_encode(array_values($servicosPorMes)) !!},
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            var sexoCtx = document.getElementById('sexoProprietariosChart').getContext('2d');
            var sexoProprietariosChart = new Chart(sexoCtx, {
                type: 'pie',
                data: {
                    labels: {!! json_encode(array_keys($sexoProprietarios)) !!},
                    datasets: [{
                        label: 'Proprietários',
                        data: {!! json_encode(array_values($sexoProprietarios)) !!},
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options:{
                    responsive:true
                }
            });

            var servicosAnoCtx = document.getElementById('servicosPorAnoChart').getContext('2d');
            var servicosPorAnoChart = new Chart(servicosAnoCtx, {
                type: 'line',
                data: {
                    labels: {!! json_encode(array_keys($servicosPorAno)) !!},
                    datasets: [{
                        label: 'Serviços por Ano',
                        data: {!! json_encode(array_values($servicosPorAno)) !!},
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            var veiculosCtx = document.getElementById('veiculosPorTipoChart').getContext('2d');
            var veiculosPorTipoChart = new Chart(veiculosCtx, {
                type: 'doughnut',
                data: {
                    labels: {!! json_encode(array_keys($veiculosPorTipo)) !!},
                    datasets: [{
                        label: 'Veículos por Tipo',
                        data: {!! json_encode(array_values($veiculosPorTipo)) !!},
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>

</x-app-layout>
