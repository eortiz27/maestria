@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                	Clientes
                </div>

                <div class="card-body">

                   <div class="table-responsive">
                       <table class="table table-striped table-bordered">
                           <thead>
                               <tr> 
{{--                                     <th>w_apellido</th>
                                    <th>w_nombre</th>
                                    <th>w_edad</th>
                                    <th>w_genero</th>
                                    <th>w_tiposangre</th>
                                    <th>w_telefono</th>
                                    <th>w_correo</th>
                                    <th>w_zodiaco</th>
                                    <th>w_ocupacion</th>
                                    <th>w_pais</th>
                                    <th>w_tarjeta</th>
                                    <th>w_saldo</th> --}}
                                    <th>N°</th>
                                    <th>Apellido</th>
                                    <th>Nombre</th>
                                    <th>Edad</th>
                                    <th>Genero</th>
                                    <th>Tipo Sangre</th>
                                    <th>Teléfono</th>
                                    <th>Correo Electrónico</th>
                                    <th>Signo</th>
                                    <th>Profesión</th>
                                    <th>Pais</th>
                                    <th>Tipo de Tarjeta</th>
                                    <th>Sueldo</th>

                               </tr>
                           </thead>
                           <tbody>
                               @foreach($clientes as $key => $cliente)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $cliente->w_apellido }}</td>
                                        <td>{{ $cliente->w_nombre }}</td>
                                        <td>{{ $cliente->w_edad }}</td>
                                        <td>{{ $cliente->w_genero }}</td>
                                        <td>{{ $cliente->w_tiposangre }}</td>
                                        <td>{{ $cliente->w_telefono }}</td>
                                        <td>{{ $cliente->w_correo }}</td>
                                        <td>{{ $cliente->w_zodiaco }}</td>
                                        <td>{{ $cliente->w_ocupacion }}</td>
                                        <td>{{ $cliente->w_pais }}</td>
                                        <td>{{ $cliente->w_tarjeta }}</td>
                                        <td>{{ $cliente->w_saldo }}</td>
                                    </tr>
                               @endforeach
                           </tbody>
                       </table>
                   </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection