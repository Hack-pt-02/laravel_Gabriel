@extends('layout.breweries')

@section('title', 'Nueva cervecería')

@section('content')

<form method="post" enctype="multipart/form-data" action="{{ route ('brewerie')}}">

    @csrf

    <div class="mx-5 px-5">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre de la cervecería</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="{{ old('name') }}" placeholder="Nombre comercial de la cervecería">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" name="description" placeholder="Cuéntanos que la hace especial">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Imagen de portada</label>
            <input type="file" class="form-control" id="img" aria-describedby="img" name="img">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-dark mx-auto">Enviar</button>
        </div>
    </div>
</form>

<x-message-flash />

@endsection
