@extends('layouts.app')


@section('content')
	<div class="container">
        <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                           Reporte de clientes por país

                        </div>
                       
                        <div class="card-body">
                            Peru: {{$per}}
                            <br>
                            Brasil: {{$bra}}
                            <br>
                            EEUU: {{$us}}
                            <br>
                            Reino Unido: {{$uk}}
                            <br>
                            España: {{$es}}
                            <br>
                            Argentina: {{$arg}}
                            <br>
                            Colombia: {{$col}}
                            <br>
                            Venezuela: {{$ven}}

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

type: 'bar',

data: {

            labels: ['Perú', 'Brasil', 'EEUU', 'Reino Unido', 'España', 'Argentina', 'Colombia', 'Venezuela'],

            datasets: [{

                label: 'N° de clientes por pais',
                data: [ {{ $per }},  {{ $bra }}, {{ $us }}, {{ $uk }}, {{ $es }}, {{ $arg }}, {{ $col }}, {{ $ven }} ],

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