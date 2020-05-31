@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New factura</div>
                    <div class="card-body">
                        <a href="{{ url('/facturas') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/facturas') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('num_factura') ? 'has-error' : ''}}">
                                 <label for="num_factura" class="control-label">{{ 'Num Factura' }}</label>
                                 <input class="form-control" name="num_factura" type="number" id="num_factura">
                          </div>
                          <div class="form-group {{ $errors->has('proveedor_id') ? 'has-error' : ''}}">
                            <label for="proveedor_id">Proveedor</label>

                              <select name="proveedor_id" id="inputProveedor_id" class="form-control" required="required">

                                <option value="">Seleccione un proveedor</option>
                                @foreach( $proveedors as $item )
                                   <option value="{{ $item['id'] }}">{{ $item['proveedor'] }}</option>
                                @endforeach
                                

                              </select>
                               <!-- <label for="proveedor_id" class="control-label">{{ 'Proveedor' }}</label>
                               <input class="form-control" name="proveedor_id" type="custom-select" id="proveedor_id"> -->
                          </div>

                           <div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
                                 <label for="fecha" class="control-label">{{ 'Fecha' }}</label>
                                 <input class="form-control" name="fecha" type="text" id="fecha">
                          </div>
                          
                          <div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
                               <label for="foto" class="control-label">{{ 'Foto' }}</label>
                               <input class="form-control" name="foto" type="file" id="foto">
                          </div>
                          


                          <div class="form-group">
                               <input class="btn btn-primary" type="submit" value="Guardar">
                          </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
