@extends('layouts.main-layout')
@section('title')
    Ricerca avanzata
@endsection
@section('content')

    @foreach ($apartments as $item)
        {{$item -> id}} <br>
        {{$item -> city}} <br>
    @endforeach
    <search-component></search-component>
@endsection