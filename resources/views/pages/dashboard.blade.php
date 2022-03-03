@extends('layouts.main-layout')
@section('title')
    Dashboard
@endsection
@section('content')
    <section class="height-body">
        <h3>
            Appartamento
        </h3>
       <div>
           <a class="btn btn-primary"href="{{route('create')}}">ADD</a>
       </div>
        @foreach ($apartments as $apartment)
            @if ($apartment -> visibility == 1)
                <a href="{{route('show', $apartment -> id )}}">{{$apartment -> description }}</a> 
                <hr>
            @endif
        @endforeach
    </section>
    
@endsection