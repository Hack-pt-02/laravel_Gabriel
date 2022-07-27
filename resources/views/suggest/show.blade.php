@extends('layout.breweries')

@section('title', 'Sugerencia de cervecería')

@section('content')

<form method="post" action="{{ route ('suggestbrewery')}}">

    @csrf

    <div class="mx-5 px-5">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">No será compartido</div>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Nombre de la cervecería</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Descripción</label>
            <textarea class="form-control" id="message" name="message"></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-dark mx-auto">Enviar</button>
        </div>
    </div>
</form>

<x-message-flash />

@endsection