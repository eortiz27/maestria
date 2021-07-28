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
{{--                                     <th>matri_fec</th>
                                    <th>fac_nom</th>
                                    <th>carr_prog</th>
                                    <th>egres_fec</th>
                                    <th>apepat</th>
                                    <th>apemat</th>
                                    <th>nombre</th>
                                    <th>sexo</th>
                                    <th>docu_num</th>
                                    <th>den_grad</th>
                                    <th>prog_estu</th>
                                    <th>mod_est</th> --}}
                                    <th>N°</th>
                                    <th>Fecha Matricula</th>
                                    <th>Facultad</th>
                                    <th>Carrera</th>
                                    <th>Fecha Egreso</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Nombre</th>
                                    <th>Sexo</th>
                                    <th>DNI</th>
                                    <th>Grado Academico</th>
                                    <th>Programa de estudio</th>
                                    <th>Modalidad Estudio</th>

                               </tr>
                           </thead>
                           <tbody>
                               @foreach($clientes as $key => $cliente)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $cliente->matri_fec }}</td>
                                        <td>{{ $cliente->fac_nom }}</td>
                                        <td>{{ $cliente->carr_prog }}</td>
                                        <td>{{ $cliente->egres_fec }}</td>
                                        <td>{{ $cliente->apepat }}</td>
                                        <td>{{ $cliente->apemat }}</td>
                                        <td>{{ $cliente->nombre }}</td>
                                        <td>{{ $cliente->sexo }}</td>
                                        <td>{{ $cliente->docu_num }}</td>
                                        <td>{{ $cliente->den_grad }}</td>
                                        <td>{{ $cliente->prog_estu }}</td>
                                        <td>{{ $cliente->mod_est }}</td>
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