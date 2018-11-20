@extends('admin.layout')

@section ('content')
		<td><a href="{{ route('personals.index')}}" class="btn btn-primary"> Listado </a></td>
		<h1>Nueva Persona</h1>

		@include('admin.personal.fragment.error')

	{!! Form::open(['route' => 'personals.store']) !!}

		@include('admin.personal.fragment.form')
 
 	{!! Form::close() !!}
  
  
@endsection