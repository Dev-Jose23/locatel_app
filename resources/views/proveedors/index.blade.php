@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
           
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center"><strong><h3>Lista de Proveedores</h3></strong></div>
                    <div class="card-body">
                        <a href="{{ url('/proveedors/create') }}" class="btn btn-success btn-sm" title="Agregar nuevo proveedor">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar proveedor
                        </a>

                        <form method="GET" action="{{ url('/proveedors') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover ">
                                <thead class="text-center ">
                                    <tr>
                                        <th>#</th><th>Cod Proveedor</th><th>Proveedor</th><th>Correo</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                @foreach($proveedors as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->cod_proveedor }}</td><td>{{ $item->proveedor }}</td><td>{{ $item->correo }}</td>
                                        <td>
                                            <a href="{{ url('/proveedors/' . $item->id) }}" title="Ver proveedor"><button class="btn btn-info btn-sm"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/proveedors/' . $item->id . '/edit') }}" title="Editar proveedor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></button></a>

                                            <form method="POST" action="{{ url('/proveedors' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Eliminar proveedor" onclick="return confirm(&quot;Confirm Borrar?&quot;)"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {{ $proveedors->render() }} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
