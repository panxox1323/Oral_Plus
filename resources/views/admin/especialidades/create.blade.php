@extends('app')

@section('content')
    <div class="container navbaar">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-capitalize text-center"><h4><strong><span class="icon-circle-with-plus"></span> Nueva Especialidad</strong></h4></div>

                    <div class="panel-body">

                        @include('admin.partials.message')


                        {!! Form::open(['route' => 'admin.especialidades.store', 'method' => 'POST'  ]) !!}
                            @include('admin.especialidades.partials.fields')
                            <button type="submit" class="btn btn-success btn-lg"><span class="icon-check"></span> Crear especialidad</button>
                            @include('admin.especialidades.partials.cancelar')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection