@extends('admin.layout')

@section ('content')
		<td><a href="{{ route('houseclients.index')}}" class="btn btn-primary"> Listado </a></td>
		<h1>Editar Cliente</h1>

		@include('admin.houseclient.fragment.error')

	{!! Form::model($houseclient, ['route' => ['houseclients.update', $houseclient->id], 'method' => 'PUT']) !!}

		@include('admin.houseclient.fragment.form')
 
 	{!! Form::close() !!}
  
@endsection