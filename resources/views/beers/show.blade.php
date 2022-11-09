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

<div class="container d-flex justify-content-center">
    @if (Auth::check())

        <div class="col text-center"><a href="{{ route ('beers.edit', $beer) }}" class="btn btn-warning">Editar</a></div>
        <form method="post" action="{{ route ('beers.destroy', $beer) }}">
            @csrf
            @method('delete')
                <div class="col text-center"><input type="submit" value="Eliminar" class="btn btn-danger"></div>
        </form>
    @else
        <div class="col-sm-12 text-center"><p>Solamente el autor puede modificar la cervecería</p></div>
    @endif
        <div class="col text-center"><a href="{{ route ('beers.index') }}" class="btn btn-success">Volver</a></div>
</div>

@endsection
