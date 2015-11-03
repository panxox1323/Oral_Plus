<div class="factura">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-xs-6">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                {!! Form::label('id_factura', 'N&uacute;mero Factura', ['class' => '']) !!}
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                @if($errors->all('id_factura'))
                    <div class="" role="alert">
                        <p class="porte2 pull-right">{{ $errors->first('id_factura') }}</p>
                    </div>
                @endif
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                {!! Form::text('id_factura', null, ['class' => 'form-control', 'onKeyPress' => 'return soloNumeros(event)'] ) !!}
            </div>
        </div>

        <div class="c   ol-sm-6 col-md-6 col-xs-6 form-group">
            <div class="col-sm-12 col-md-12 col-xs-12 form-group">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {!! Form::label('id', 'Proveedor', ['class' => '']) !!}
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {!! Form::select('id_proveedor', $data, null, ['class' => 'form-control', 'id' => 'selector']) !!}
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-6 col-xs-6">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {!! Form::label('fecha', 'Fecha', ['class' => '']) !!}
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {!! Form::text('fecha', null, ['id' => 'datepicker', 'class' => '', 'name' => 'datepicker', 'readonly' => "readonly"]) !!}
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-6 col-xs-6">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 form-group">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {!! Form::label('forma_pago', 'Forma de Pago', ['class' => '']) !!}
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {!! Form::select('forma_pago',config('opciones.formaPago'),null, ['class' => 'form-control', 'id' => 'selector']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
