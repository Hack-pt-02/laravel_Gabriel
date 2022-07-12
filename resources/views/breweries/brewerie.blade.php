
@extends('layout.breweries')

@section('title', 'Detalle de cervecería')

@section('content')

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$brewerie[1]}}</h5>
        <p class="card-text">{{$brewerie[2]}}</p>
    </div>
</div>

<div class="container d-flex justify-content-center">
    <a href="{{ url ('/index') }}" class="btn btn-danger">Volver</a>
</div>

@endsection
