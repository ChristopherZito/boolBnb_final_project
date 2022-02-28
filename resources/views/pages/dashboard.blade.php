@extends('layouts.main-layout')
@section('title')
    Dashboard
@endsection
@section('content')

    <h3>
        Appartamento
    </h3>
   <div>
       <a class="btn btn-primary"href="">ADD</a>
   </div>
    @foreach ($apartments as $apartment)
        @if ($apartment -> visibility == 1)
            <a class="text-light" href="{{route('show', $apartment -> id )}}">{{$apartment -> description }}</a> 
            <hr class="bg-light">
        @endif
    @endforeach
@endsection