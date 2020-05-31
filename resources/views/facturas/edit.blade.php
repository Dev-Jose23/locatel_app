@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
          
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Edit factura #{{ $factura->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/facturas') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />


                        <form method="POST" action="{{ url('/facturas/' . $factura->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('num_factura') ? 'has-error' : ''}}">
                                 <label for="num_factura" class="control-label">{{ 'Num Factura' }}</label>
                                 <input class="form-control" name="num_factura" type="number" id="num_factura" value="{{ $factura->num_factura }}">
                          </div>
                          
                

                           <div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
                                 <label for="fecha" class="control-label">{{ ' Fecha' }}</label>
                                 <input class="form-control" name="fecha" type="text" id="fecha" value="{{ $factura->fecha }}">
                          </div>
                          
                          <!-- <div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
                               <label for="foto" class="control-label">{{ 'Foto' }}</label>
                               <input class="form-control" name="foto" type="file" id="foto">
                          </div> -->

                          <div class="form-group">
                                 <label for="status">
                                 <input class="form-group" name="status" type="checkbox" id="status" value="1" > Pagar factura</label>
                          </div>
                          


                          <div class="form-group">
                               <input class="btn btn-primary" type="submit" value="Actualizar">
                          </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
