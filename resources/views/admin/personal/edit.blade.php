@extends('admin.layout')

@section ('content')
		<td><a href="{{ route('personals.index')}}" class="btn btn-primary"> Listado </a></td>
		<h1>Editar Persona</h1>

		@include('admin.personal.fragment.error')

	{!! Form::model($personal, ['route' => ['personals.update', $personal->id], 'method' => 'PUT']) !!}

		@include('admin.personal.fragment.form')
 
 	{!! Form::close() !!}
  
@endsection