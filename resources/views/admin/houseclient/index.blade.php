@extends('admin.layout')

@section ('content')


	 <h1><strong>Personal de Trabajo</strong></h1>
   <a href="{{ route('houseclients.create')}}" class="btn btn-primary pull-right">Registrar</a><br> <br>

   @include('admin.houseclient.fragment.info')
    
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          
          <th width="20px"> ID </th>
          <th> Nombre </th>
          <th> Email </th>
          <th> Telefono </th>
          <th> Descripcion </th>
          <th> Opciones </th>
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
            <td><a href="{{ route('houseclients.show', $cliente->id)}}" class="btn btn-primary"> Ver </a></td>
            <td><a href="{{ route('houseclients.edit', $cliente->id)}}" class="btn btn-primary"> Modificar </a></td>
            <td> 
              <form action="{{ route('houseclients.destroy', $cliente->id) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger"> Eliminar </button>
              </form>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {!! $houseclients->render() !!}

    </div>
          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->

        <script>
  $(function () {
     
    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>
@endsection