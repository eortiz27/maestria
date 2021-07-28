@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                	Graduados
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
                               @foreach($graduados as $key => $graduado)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $graduado->matri_fec }}</td>
                                        <td>{{ $graduado->fac_nom }}</td>
                                        <td>{{ $graduado->carr_prog }}</td>
                                        <td>{{ $graduado->egres_fec }}</td>
                                        <td>{{ $graduado->apepat }}</td>
                                        <td>{{ $graduado->apemat }}</td>
                                        <td>{{ $graduado->nombre }}</td>
                                        <td>{{ $graduado->sexo }}</td>
                                        <td>{{ $graduado->docu_num }}</td>
                                        <td>{{ $graduado->den_grad }}</td>
                                        <td>{{ $graduado->prog_estu }}</td>
                                        <td>{{ $graduado->mod_est }}</td>
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