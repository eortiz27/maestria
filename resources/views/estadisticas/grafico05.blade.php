@extends('layouts.app')


@section('content')
	<div class="container">
        <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        Reporte de signos

                        </div>
                       
                        <div class="card-body">
                        Aries: {{$aries}} 
                        <br>
                        Tauro: {{$tauro}}
                        <br>
                        Geminis: {{$geminis}}
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

        type: 'radar',

        data: {

            labels: ['aries', 'tauro', 'geminis'],

            datasets: [{

                label: 'Reporte varones',
                data: [ {{$aries}},  {{$tauro}}, {{$geminis}}], 
                fill: true, //agregado
                backgroundColor: [
                    'rgb(60, 179, 113)',
                    
                ],

                
                }, //agregado

                { //agregado 
                label: 'Reporte de mujeres',
                data: [ {{$leo}},  {{$virgo}}, {{$scorpio}}], 
                fill: true,

                backgroundColor: [
                    'rgb(255, 99, 132, 0.2)',
                   
                ],
                
            }]
        }
        });

    </script>
@endsection