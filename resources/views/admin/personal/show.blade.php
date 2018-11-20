@extends('admin.layout')

@section ('content')
		<td><a href="{{ route('personals.index')}}" class="btn btn-primary"> Regresar </a></td>
		<td><a href="{{ route('personals.edit', $personal->id)}}" class="btn btn-primary"> Modificar </a></td>

	<h1><strong>Información detallada</strong></h1>

	<h4>Datos de: <strong>{{ $personal->nombre }}</strong></h4>
   <p><strong>Email:</strong> {{ $personal->email }} </p>
   <p><strong>Numero de Contacto: </strong> {{ $personal->telefono }}</p>
 
  
@endsection