@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New proveedor</div>
                    <div class="card-body">
                        <a href="{{ url('/proveedors') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/proveedors') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('cod_proveedor') ? 'has-error' : ''}}">
                                 <label for="num_factura" class="control-label">{{ 'Cod Proveedor' }}</label>
                                 <input class="form-control" name="cod_proveedor" type="number" id="cod_proveedor">
                          </div>
                          <div class="form-group {{ $errors->has('proveedor') ? 'has-error' : ''}}">
                               <label for="proveedor_id" class="control-label">{{ 'Proveedor' }}</label>
                               <input class="form-control" name="proveedor" type="custom-select" id="proveedor">
                          </div>

                          <div class="form-group {{ $errors->has('correo') ? 'has-error' : ''}}">
                               <label for="correo" class="control-label">{{ 'Correo' }}</label>
                               <input class="form-control" name="correo" type="custom-select" id="correo">
                          </div>
                          
                          
                          <div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
                               <label for="telefono" class="control-label">{{ 'Teléfono' }}</label>
                               <input class="form-control" name="telefono" type="custom-select" id="telefono">
                          </div>
                          
                          


                          <div class="form-group">
                               <input class="btn btn-primary" type="submit" value="Guardar">

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
