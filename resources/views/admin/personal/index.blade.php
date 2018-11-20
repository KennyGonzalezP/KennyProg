@extends('admin.layout')

@section ('content')


	 <h1><strong>Personal de Trabajo</strong></h1>
   <a href="{{ route('personals.create')}}" class="btn btn-primary pull-right">Registrar</a><br> <br>

   @include('admin.personal.fragment.info')
    
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          
          <th width="20px"> ID </th>
          <th> Nombre </th>
          <th> Email </th>
          <th> Telefono </th>
          <th> Opciones </th>
          <th colspan="3">&nbsp;</th>

        </tr>
      </thead>
      <tbody>
        @foreach($personals as $personal)
        <tr>
            <td>{{ $personal->id }}</td>
            <td> <strong> {{ $personal->nombre }} </strong></td>
            <td>{{ $personal->email }}</td>
            <td>{{ $personal->telefono }}</td>
            <td><a href="{{ route('personals.show', $personal->id)}}" class="btn btn-primary"> Ver </a></td>
            <td><a href="{{ route('personals.edit', $personal->id)}}" class="btn btn-primary"> Modificar </a></td>
            <td> 
              <form action="{{ route('personals.destroy', $personal->id) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger"> Eliminar </button>
              </form>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {!! $personals->render() !!}
@endsection