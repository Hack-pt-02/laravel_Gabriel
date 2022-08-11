@extends('layout.breweries')

@section('title', 'Detalle de cerveza')

@section('content')

<div class="container d-flex justify-content-center">
    <div class="card mx-auto my-4" style="width: 22rem;">
        <div class="card-body">
            <h5 class="card-title text-center">{{$beer->name}}</h5>
            <p class="card-text">{{$beer->description}}</p>
            <p class="card-text">País de orígen: {{$beer->country}}</p>
            <p class="card-text">Marca: {{$beer->brand}}</p>
            <p class="card-text">Graduación: {{$beer->vol}}</p>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center mt-4">
    <div class="row justify-content-between">
        <div class="col-sm-4"><a href="{{ route ('beers.edit', $beer) }}" class="btn btn-warning">Editar</a></div>
        <div class="col-sm-4">
            <form method="post" action="{{ route ('beers.destroy', $beer) }}">
                @method("delete")
                @csrf
                <input type="submit" value="Eliminar" class="btn btn-danger">
            </form>
            <!-- a href="" class="btn btn-danger">Eliminar</!-->
        </div>
        <div class="col-sm-4"><a href="{{ route ('beers.index') }}" class="btn btn-success">Volver</a></div>
    </div>
</div>

@endsection
