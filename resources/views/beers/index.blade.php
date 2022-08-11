@extends('layout.breweries')

@section('title', 'Listado de cervezas')

@section('content')

    <div class="row">

        @foreach ($beers as $beer)
        <div class="col-4 p-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route ('beers.show', $beer->id) }}" class="text-decoration-none text-warning">{{$beer->name}}</a></h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div>
        <div class="container d-flex justify-content-center mt-4">
            {{ $beers->links () }}
        </div>
    </div>

    @auth
        <div>
            <div class="container d-flex justify-content-center mt-4">
                <a href="{{route ('beers.create')}}" class="btn btn-warning">Nueva cerveza</a>
            </div>
        </div>
    @else
        <p class="text-center">Los usuarios registrados pueden crear nuevas cervezas</p>
    @endauth

@endsection

@isset($texto)

@section('message')
    {{-- <x-message texto="{{ $texto }}"/> // <x-message :texto="$texto"/> --}}
    <x-message color="danger">
        <x-slot:texto>{{ $texto }}</x-slot:texto>
    </x-message>
@endsection

@endisset
