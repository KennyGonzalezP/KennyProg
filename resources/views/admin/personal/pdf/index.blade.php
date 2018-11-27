<table class="table table-hover table-striped">
      <thead>
        <tr>
          
          <th width="20px"> ID </th>
          <th> Nombre </th>
          <th> Email </th>
          <th> Telefono </th>        

        </tr>
      </thead>
      <tbody>
        @foreach($personals as $personal)
        <tr>
            <td>{{ $personal->id }}</td>
            <td> <strong> {{ $personal->nombre }} </strong></td>
            <td>{{ $personal->email }}</td>
            <td>{{ $personal->telefono }}</td>
            
        </tr>
        @endforeach
      </tbody>
</table>