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
                        Masculino: {{$masculino}}
                            <br>
                        Femenino: {{$femenino}}
                        </div>

                        <div class="class-body">
                            <canvas id="myChart" width="400", height="400"></canvas>

                        </div>
                    </div>
                </div>
        </div>
    </div>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {

        type: 'bar',

        data: {

            labels: ['Masculino', 'Femenino'],

            datasets: [{

                label: 'N° de Estudiantes por sexo',
                data: [ {{$masculino}},  {{$femenino}}],
                backgroundColor: [
                    'rgb(60, 179, 113)',
                    'rgb(106, 90, 205)',
                ],

                borderColor: [
                    'rgb(255, 99, 132, 1)',
                    'rgb(54, 162, 235, 1)'
                ],

                borderWidth: 1

                
            }]
        }
        });
    </script>
@endsection