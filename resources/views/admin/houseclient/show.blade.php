@extends('admin.layout')

@section ('content')
		<td><a href="{{ route('houseclients.index')}}" class="btn btn-primary"> Regresar </a></td>
		<td><a href="{{ route('houseclients.edit', $houseclient->id)}}" class="btn btn-primary"> Modificar </a></td>

	<h1><strong>Información detallada</strong></h1>

	<h4>Datos de: <strong>{{ $houseclient->nombre }}</strong></h4>
   <p><strong>Email:</strong> {{ $houseclient->email }} </p>
   <p><strong>Numero de Contacto: </strong> {{ $houseclient->telefono }}</p>
   <p><strong>Descripción: </strong> {{ $houseclient->descripcion }} </p>
 
  
@endsection