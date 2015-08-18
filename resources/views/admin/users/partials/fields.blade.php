
<div class="form-group">
    {!! Form::text('first_name', null, ['class' => 'form-control floating-label', 'placeholder' => 'Nombres:'] ) !!}
</div>
<div class="form-group">
        {!! Form::text('last_name', null, ['class' => 'form-control floating-label', 'placeholder' => 'Apellidos:'] ) !!}
</div>
<div class="form-group">
        {!! Form::password('password', ['class' => 'form-control floating-label', 'placeholder' => 'Password'] ) !!}
</div>
<div class="form-group">
    {!! Form::text('run', null, ['class' => 'form-control floating-label', 'placeholder' => 'RUN']) !!}
</div>
<div class="form-group">
    <h3><strong>{!! Form::text('telefono', null, ['class' => 'form-control floating-label', 'placeholder' => 'Tel&eacute;fono']) !!}</strong></h3>
</div>
<div class="form-group">
    {!! Form::text('email', null, ['class' => 'form-control floating-label', 'placeholder' => 'Correo electr&oacute;nico']) !!}
</div>
<div class="form-group">
    {!! Form::label('type', 'Tipo de Usuario') !!}
    {!! Form::select('type', config('options.types'), null, ['class' => 'form-control']) !!}
</div>
