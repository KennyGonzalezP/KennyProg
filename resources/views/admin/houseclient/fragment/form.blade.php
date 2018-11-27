<div class="form-group">
	{!! Form::label('nombre', 'Nombre de la persona') !!}
	{!! Form::text('nombre', null, ['class' => 'from-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Email de la persona') !!}
	{!! Form::text('email', null, ['class' => 'from-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('telefono', 'Telefono de la persona') !!}
	{!! Form::text('telefono', null, ['class' => 'from-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('descripcion', 'Descripción del Cliente') !!}
	{!! Form::text('descripcion', null, ['class' => 'from-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR',  ['class' => 'btn btn-primary']) !!}
</div>