@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Facturas</div>
                    <div class="card-body">
                        <a href="{{ url('/facturas/create') }}" class="btn btn-success btn-sm" title="Add New factura">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/facturas') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table table-bordered">
                            <table class="table col-md-12">
                                <thead class="bg-dark text-center text-light">
                                    <tr>
                                        <th>#</th><th>Num Factura</th>
                                        <th>Código proveedor</th>
                                        <th>Proveedor</th>
                                        <th>Fecha de ingreso</th>
                                        <th>Estatus</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                @foreach($facturas as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->num_factura }}</td>
                                        <td>{{ $item->proveedor->cod_proveedor }}</td>
                                        <td>{{ $item->proveedor->proveedor }}</td>
                                        <td>{{ $item->fecha }}</td>
                                         <td>
                                             @if($item->status ==1)
                                                <li class="fa fa-check-circle"> Factura pagada</li>
                                                @else
                                                <li class="fa fa-credit-card"> Factura por pagar</li>
                                                @endif
                                         </td>
                                        <td>
                                            <a href="{{ url('/facturas/' . $item->id) }}" title="Ver factura"><button class="btn btn-info btn-sm"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/facturas/' . $item->id . '/edit') }}" title="Editar factura"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></button></a>

                                            <form method="POST" action="{{ url('/facturas' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Eliminar factura" onclick="return confirm(&quot;Confirm Borrar?&quot;)"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i> </button>
                                            </form>

                                             <a href="{{ url('/facturas/' . $item->id . '/edit') }}" title="Pagar factura"><button class="btn btn-dark btn-sm"><i class="fa fa-credit-card fa-lg" aria-hidden="true"></i></button></a>
                                        </td>
                                          
                                           
                                        
                                        

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {{ $facturas->render() }} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@endsection
