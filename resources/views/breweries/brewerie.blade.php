@extends('layout.breweries')

@section('title', 'Detalle de cervecería')

@section('content')

<div class="card mx-auto my-4" style="width: 22rem;">
    <div class="card-body">
        <h5 class="card-title text-center">{{$brewerie->name}}</h5>
        <p class="card-text">{{$brewerie->description}}</p>
    </div>
</div>

<div class="container d-flex justify-content-center">
    <a href="{{ url ('/index') }}" class="btn btn-danger">Volver</a>
</div>

@endsection
