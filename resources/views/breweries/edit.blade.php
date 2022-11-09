@extends('layout.breweries')

@section('title', 'Modificar cervecería')

@section('content')

<form method="post" enctype="multipart/form-data" action="{{ route ('brewerieupdate', $brewerie)}}">

    @method("PUT")
    @csrf

    <div class="mx-5 px-5">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre de la cervecería</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="{{ $brewerie->name }}" placeholder="Nombre comercial de la cervecería">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" aria-describedby="description" name="description" placeholder="Cuéntanos que la hace especial">{{ $brewerie->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Imagen de portada</label>
            <input type="file" class="form-control" id="img" aria-describedby="img" name="img">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Carta de cervezas</label>
            @foreach ($beers as $beer)
                <input type="checkbox" id="beers_{{$beer->id}}" aria-describedby="name" name="beers[]" value="{{ $beer->id }}" {{ ($brewerie->beers->find($beer->id)) ? 'checked' : '' }}> {{$beer->name}}
            @endforeach
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-dark mx-auto">Enviar</button>
        </div>
    </div>
</form>

<x-message-flash />

@endsection
