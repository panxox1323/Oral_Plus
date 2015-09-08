@extends('app')

@section('content')
    <div class="container navbaar">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-capitalize text-center"><h4><strong><span class="icon-add-user"></span> Nuevo Usuario</strong></h4></div>

                    <div class="panel-body">

                        @include('admin.partials.message')


                        {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST',  ]) !!}
                            @include('admin.users.partials.fields')
                            <button type="submit" class="btn btn-success btn-lg btn-crear"><span class="icon-user-check"></span> Crear Usuario</button>
                            @include('admin.users.partials.cancelar')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection