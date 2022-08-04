@extends('layout.breweries')

@section('title', 'Listado de cervecerías')

@section('content')

<table class="table table-striped container">
    <div class="row">

        @foreach ($breweries as $brewerie)
        <div class="col-4 p-4">
            <div class="card">
                <img src="{{$brewerie->url}}" onclass="card-img-top" onclick="window.location = '{{ route ('brewerieshow' , $brewerie->id)}}'">
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route ('brewerieshow', $brewerie->id) }}" class="text-decoration-none text-warning">{{$brewerie->name}}</a></h5>
                </div>
            </div>
        </div>
        {{-- <tr><td><a href="/brewerie/{{$brewerie->id}}">{{$brewerie->name}}</a></td></tr> --}}
        @endforeach
    </div>
    
</table>
<a href="{{route ('brewerie')}}" class="btn btn-warning ms-5">Nueva cervecería</a>
@endsection

@isset($texto)

@section('message')
{{-- <x-message texto="{{ $texto }}"/> // <x-message :texto="$texto"/> --}}
<x-message color="danger">
    <x-slot:texto>{{ $texto }}</x-slot:texto>
</x-message>
@endsection

@endisset
