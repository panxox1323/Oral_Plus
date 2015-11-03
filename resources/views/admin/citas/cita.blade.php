@extends('layout.admin')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Mantenedor de Citas</strong></h5></div>
        @include('admin.partials.mensaje')
        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    {!! Form::model(Request::all(),['route' => 'admin.consultas.index', 'method' => 'GET' , 'role' => 'search']) !!}
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <h4 class="text-center color-subtitulo">Seleccione una Fecha</h4>

                                <div style="overflow:hidden;">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div id="datetimepicker12"></div>
                                                {!! Form::text('dia', null, ['class' => '', 'id' => 'fechaOculta']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" >
                                <h4>Seleccione una Hora</h4>
                                <div id="acordion" style="overflow: scroll; max-height: 440px;">
                                    @foreach($horas as $hora)
                                        @if($hora->estado == 'reservada')

                                            <h3 style="color: red;"><span class="icon-cancel-circle" style="color: red;"></span>  {{ $hora->hora }}</h3>
                                        @else
                                            <h3><span class="icon-chevron-right" style="color: green; font-size: 20px;"></span>  {{ $hora->hora }}</h3>
                                        @endif
                                        <div>
                                            @if($hora->estado == 'reservada')
                                                <p style="color: red;">{{ $hora->estado }}</p>
                                            @else
                                                <p class="text-green">{{ $hora->estado }}</p>
                                            @endif

                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <h4>Comentarios</h4>
                            <textarea name="" id="" cols="30" rows="10" style="resize: none;" placeholder="Ingrese Comentarios"></textarea>
                            <button type="submit" class="btn btn-info btn-block btn-lg "><span class="icon-calendar"></span></span> <strong>Agendar</strong></button>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


@endsection