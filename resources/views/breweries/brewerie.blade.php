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
            <p>Cervecería propuesta por <a class="btn btn-outline-primary" href="{{ route ('proposals', $brewerie->user->id) }}">{{ $brewerie->user->name }}</a></p>
            <p>
                @foreach ($brewerie->beers as $beer)
                    <a href="{{ route ('breweriebeers', $beer->id) }}" class="text-decoration-none"><span class="badge bg-success">{{$beer->name}}</span></a>
                @endforeach
            </p>
            <p class="card-text">{{$brewerie->description}}</p>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center">
    @if (Auth::user()->id == $brewerie->user->id)
        <div class="col text-center"><a href="{{ route ('brewerieedit', $brewerie) }}" class="btn btn-warning">Editar</a></div>
        <form method="post" action="{{ route ('breweriedelete', $brewerie) }}">
            @csrf
            @method('delete')
                <div class="col text-center"><input type="submit" class="btn btn-danger" value="Borrar"></div>
        </form>
    @else
        <div class="col-sm-12 text-center"><p>Solamente el autor puede modificar la cervecería</p></div>
    @endif
        <div class="col text-center"><a href="{{ route ('home') }}" class="btn btn-success">Volver</a></div>
</div>


@endsection
