@extends('layouts.main-layout')
@section('title')
    Ricerca avanzata
@endsection
@section('content')
{{-- <section class="bg-success p-5 d-flex flex-wrap">
    @foreach ($apartments as $apartment)
        <div class="col-6 py-2 border border-dark">
            <div class="img-container">
                <a href="{{route("show", $apartment -> id )}}"><img class="img img-fluid" src="{{$apartment -> image}}" alt=""></a>
            </div>
            <div>
                <span class="text-dark"> Descrizione: </span>{{$apartment -> description}} <br>
                <span class="text-dark"> Città: </span>{{$apartment -> city}} <br>
                <span class="text-dark"> Stanze: </span>{{$apartment -> rooms}} <br>
                <span class="text-dark"> Letti: </span>{{$apartment -> beds}} <br>
                <span class="text-dark"> Bagni: </span>{{$apartment -> bathrooms}} <br>
                <span class="text-dark"> Indirizzo: </span>{{$apartment -> address}} <br>
            </div>
        </div>
    @endforeach
</section> --}}

<search-component city="{{$city}}"></search-component>
@endsection