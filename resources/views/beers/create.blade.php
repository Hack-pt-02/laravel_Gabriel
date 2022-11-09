@extends('layout.breweries')

@section('title', 'Nueva cerveza')

@section('content')

<form method="post" action="{{ route ('beers.store')}}"> {{-- enctype="text/plain" --}}

    @csrf

    <div class="mx-5 px-5">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre de la cerveza</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="{{ old('name') }}" placeholder="Nombre comercial de la cerveza">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" aria-describedby="description" name="description" placeholder="Cuéntanos que la hace especial">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">País de origen</label>
            <input type="text" class="form-control" id="country" aria-describedby="country" name="country" value="{{ old('country') }}" placeholder="País de origen de la cerveza">
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Marca de la cerveza</label>
            <input type="text" class="form-control" id="brand" aria-describedby="brand" name="brand" value="{{ old('brand') }}" placeholder="Marca de la cerveza">
        </div>
        <div class="mb-3">
            <label for="vol" class="form-label">Graduación de la cerveza</label>
            <input type="number" placeholder="0,0" step="0.1" min="0" max="12" class="form-control" id="vol" aria-describedby="vol" name="vol" value="{{ old('vol') }}">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-dark mx-auto">Enviar</button>
        </div>
    </div>
</form>

<x-message-flash />

@endsection
