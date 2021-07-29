@extends('layouts.app')


@section('content')
	<div class="container">
        <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                           Reporte de cliente por tipo de sangre

                        </div>
                       
                        <div class="card-body">
                            A+  : {{$apositivo}}
                            <br>
                            A-  : {{$anegativo}}
                            <br>
                            B+  : {{$bpositivo}}
                            <br>
                            B-  : {{$bnegativo}}
                            <br>
                            O+  : {{$opositivo}}
                            <br>
                            O-  : {{$onegativo}}
                            <br>
                            AB+ : {{$abpositivo}}
                            <br>
                            AB- : {{$abnegativo}}

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

type: 'polarArea',

data: {

            labels: ['A+', 'A-', 'B+', 'B-', 'O+', 'O+', 'AB+', 'AB-'],

            datasets: [{

                label: 'N° de egresados por facultades',
                data: [ {{$apositivo}},  {{$anegativo}}, {{$bpositivo}}, {{$bnegativo}}, {{$opositivo}}, {{$onegativo}}, {{$abpositivo}}, {{$abnegativo}}  ],

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