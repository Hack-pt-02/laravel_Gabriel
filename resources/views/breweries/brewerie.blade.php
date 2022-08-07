@extends('layout.breweries')

@section('title', 'Detalle de cervecería')

@section('content')

<div class="container d-flex justify-content-center">
    <div class="card mx-auto my-4" style="width: 22rem;">
        <div class="card-body">
            <img src="{{ $brewerie->url ?: asset ('/img/defaultbreweryimg.jpg') }}" class="img-fluid" alt="imagen de cervecería">
        </div>
        <div class="card-body">
            <h5 class="card-title text-center">{{$brewerie->name}}</h5>
            <p class="card-text">{{$brewerie->description}}</p>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center">
    <a href="{{ url ('/index') }}" class="btn btn-danger">Volver</a>
</div>

@endsection
