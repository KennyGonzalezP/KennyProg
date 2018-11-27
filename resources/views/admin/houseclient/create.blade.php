@extends('admin.layout')

@section ('content')
		<td><a href="{{ route('houseclients.index')}}" class="btn btn-primary"> Listado </a></td>
		<h1>Nuevo Cliente</h1>

		@include('admin.houseclient.fragment.error')

	{!! Form::open(['route' => 'houseclients.store']) !!}

		@include('admin.houseclient.fragment.form')
 
 	{!! Form::close() !!}
  
  
@endsection