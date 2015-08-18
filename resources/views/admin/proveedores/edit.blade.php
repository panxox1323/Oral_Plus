@extends('app')

@section('content')
    <div class="container navbaar">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-capitalize text-center">Editar Proveedor {{ $proveedor->nombre }}</div>


                    <div class="panel-body">

                        @include('admin.partials.message')

                        {!! Form::model($proveedor, ['route' => ['admin.proveedores.update', $proveedor], 'method' => 'PUT' ]) !!}

                            @include('admin.proveedores.partials.fields')

                            <button type="submit" class="btn btn-success btn-lg"><span class="icon-edit"></span> Editar Proveedor</button>
                            @include('admin.proveedores.partials.cancelar')


                        {!! Form::close() !!}
                        <hr>
                        @include('admin.proveedores.partials.delete')


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection