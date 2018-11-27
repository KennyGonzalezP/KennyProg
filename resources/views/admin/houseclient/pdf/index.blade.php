
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          
          <th width="20px"> ID </th>
          <th> Nombre </th>
          <th> Email </th>
          <th> Telefono </th>
          <th> Descripcion </th>
    
          <th colspan="3">&nbsp;</th>

        </tr>
      </thead>
      <tbody>
        @foreach($houseclients as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td> <strong> {{ $cliente->nombre }} </strong></td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->telefono }}</td>
            <td>{{ $cliente->descripcion }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>