@extends('layouts.app')


@section('content')
	<div class="container">
        <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                           Gráfico

                        </div>
                       
                        <div class="card-body">
                            Derecho: {{$derecho}}
                            <br>
                            Salud: {{$salud}}
                            <br>
                            Ingenieria: {{$ingenieria}}
                            <br>
                            Educacion: {{$educacion}}
                            <br>
                            Empresariales: {{$empresariales}}

                        </div>

                        <div class="card-body">
                            <canvas id="myChart" width="400", height="400"></canvas>
                        </div>

                    </div>
                </div>
        </div>
    </div>

    <script>
       
var ctx = document.getElementById('myChart').getContext('2d');
        
var chart = new Chart(ctx, {

type: 'doughnut',

data: {

            labels: ['Derecho', 'Salud', 'Ingenieria', 'Educacion', 'Empresariales'],

            datasets: [{

                label: 'N° de egresados por facultades',
                data: [ {{ $derecho }},  {{ $salud }}, {{ $ingenieria }}, {{ $educacion }}, {{ $empresariales }} ],

                backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                ],

                borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                ],

                borderWidth: 1

                
            }]
        }
});
    </script>
@endsection