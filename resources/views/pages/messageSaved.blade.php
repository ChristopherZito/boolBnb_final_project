@extends('layouts.main-layout')
@section('title')
    Message Send
@endsection
@section('content')
<div class="text-center py-5">
    <h3 class="text-dark">
        Messaggio inviato
    </h3>
    <a href="{{route('home')}}" class="btn btn-primary m-3 text-light">Ritorna alla Home</a>
    <a href="{{route('show', $apartment -> id)}}" class="btn btn-primary m-3 text-light">Ritorna all'appartamento</a>
</div>
@endsection