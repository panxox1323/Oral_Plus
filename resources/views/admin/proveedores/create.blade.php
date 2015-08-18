@extends('app')

@section('content')
    <div class="container navbaar">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-capitalize text-center"><h4><strong><span class="icon-add-user"></span> Nuevo Proveedor</strong></h4></div>

                    <div class="panel-body">

                        @include('admin.partials.message')


                        {!! Form::open(['route' => 'admin.proveedores.store', 'method' => 'POST'  ]) !!}
                            @include('admin.proveedores.partials.fields')
                            <button type="submit" class="btn btn-success btn-lg"><span class="icon-check"></span> Crear Turno</button>
                            @include('admin.proveedores.partials.cancelar')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection