<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Mete tu nombre']) !!}
</div>
<div class="form-group">
    {!! Form::label('apellido', 'Apellido') !!}
    {!! Form::text('apellido', null, ['class'=>'form-control', 'placeholder'=>'Mete tu apellido']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'E-Mail Address') !!}
    {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Mete tu mail']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
</div>
{{-- <div class="form-group">
   {!! Form::label('password_confirmation', 'Confirma Contraseña') !!}
    {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
</div>--}}
<div class="form-group">
    {!! Form::label('type', 'Tipo de usuario') !!}
    {!! Form::select('type', [''=>'Selecciones Tipo','user'=>'Usuario', 'admin'=>'Administrador'], null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('edad', 'Edad') !!}
    {!! Form::text('edad', null, ['class'=>'form-control', 'placeholder'=>'Mete tu edad']) !!}
</div>
<div class="form-group">
    {!! Form::label('fecha_nacimiento', 'Fecha de nacimiento') !!}
    {!! Form::date('fecha_nacimiento', null, ['class'=>'form-control', 'placeholder'=>'Mete tu mail']) !!}
</div>
<div class="form-group">
    {!! Form::label('telefono', 'Telefono') !!}
    {!! Form::text('telefono', null, ['class'=>'form-control', 'placeholder'=>'Mete tu mail']) !!}
</div>
<div class="form-group">
    {!! Form::label('sexo', 'Genero') !!}
    {!! Form::select('sexo', [''=>'Selecciones Tipo','M'=>'Masculino', 'F'=>'Femenino'], null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
</div>
