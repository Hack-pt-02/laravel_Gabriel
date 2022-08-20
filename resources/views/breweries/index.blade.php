@extends('layout.breweries')

@section('title', 'Listado de cervecerías')

@section('content')

@isset($filter)
    <h5 class="text-center">Propuestas por {{ $filter }}</h5>
@endisset

    <div class="row">

        @foreach ($breweries as $brewerie)
        <div class="col-4 p-4">
            <div class="card">
                <img src="{{ $brewerie->url ?: asset ('/img/defaultbreweryimg.jpg') }}" onclass="card-img-top" onclick="window.location = '{{ route ('brewerieshow' , $brewerie->id)}}'">
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route ('brewerieshow', $brewerie->id) }}" class="text-decoration-none text-warning">{{$brewerie->name}}</a></h5>
                    <p>Propuesto por <a href="{{ route ('proposals', $brewerie->user->id) }}" class="text-decoration-none"><span class="badge bg-warning">{{ $brewerie->user->name }}</span></a></p>
                    <p>
                        @foreach ($brewerie->beers as $beer)
                            <a href="{{ route ('breweriebeers', $beer->id) }}" class="text-decoration-none"><span class="badge bg-success">{{$beer->name}}</span></a>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
        {{-- <tr><td><a href="/brewerie/{{$brewerie->id}}">{{$brewerie->name}}</a></td></tr> --}}
        @endforeach
    </div>

    <div>
        <div class="container d-flex justify-content-center mt-4">
            {{ $breweries->links () }}
        </div>
    </div>

    @auth
        <div>
            <div class="container d-flex justify-content-center mt-4">
                <a href="{{route ('brewerie')}}" class="btn btn-warning">Nueva cervecería</a>
            </div>
        </div>
    @else
        <p class="text-center">Los usuarios registrados pueden crear nuevas cervecerías</p>
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
