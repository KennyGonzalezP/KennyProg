@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <p> <strong> Felicidades!! Te haz logeado exitosamente! </strong></p>
                <a href="{{ route('inicio')}}" class="btn btn-primary">Ir al portal</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
