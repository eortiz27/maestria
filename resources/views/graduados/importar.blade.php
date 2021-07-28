@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Importar Clientes
                </div>

                <div class="card-body">
                    
                    <form action="{{ route('clientes.importar.guardar') }}" method="POST" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <input type="file" name="archivo" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success">
                            Guardar
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
