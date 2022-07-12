@extends('layout.breweries')

@section('title', 'Listado de cervecerías')

@section('content')

    <table class="table table-striped container">

        @foreach ($breweries as $brewerie)
        <tr><td><a href="/brewerie/{{$brewerie[0]}}">{{$brewerie[1]}}</a></td></tr>
        @endforeach
        
    </table>

@endsection

@isset($texto)

    @section('message')
    {{-- <x-message texto="{{ $texto }}"/> // <x-message :texto="$texto"/> --}}
    <x-message color="danger">
        <x-slot:texto>{{ $texto }}</x-slot:texto>
    </x-message>
    @endsection

@endisset
