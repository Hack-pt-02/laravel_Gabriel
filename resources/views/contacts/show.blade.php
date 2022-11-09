@extends('layout.breweries')

@section('title', 'Contacta con nosotros')

@section('content')

<form method="post" action="{{ route ('contact')}}">

    @csrf

    <div class="mx-5 px-5">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">No será compartido</div>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Mensaje</label>
            <textarea class="form-control" id="message" name="message"></textarea>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="autorize">
            <label class="form-check-label" for="flexCheckDefault">
                Autorizo recibir anuncios
            </label>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-dark mx-auto">Enviar</button>
        </div>
    </div>
</form>

<x-message-flash/>

@endsection
