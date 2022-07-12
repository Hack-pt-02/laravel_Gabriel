@extends('layout.breweries')

@section('title', 'Contacta con nosotros')

@section('content')

<form class="mx-5 px-5">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1">
        <p class="text-secondary">No será compartido</p>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Autorizo recibir anuncios
        </label>
    </div>
    <div class="text-center">
        <button type="button" class="btn btn-dark mx-auto">Enviar</button>
    </div>
</form>

@endsection