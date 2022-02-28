@extends('layouts.main-layout')
@section('title')
    Dashboard
@endsection
@section('content')

    <h3>
        Appartamento
    </h3>
    @foreach ($apartments as $apartment)
        {{$apartment -> description }} <br>  
    @endforeach
@endsection