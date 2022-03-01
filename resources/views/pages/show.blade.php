@extends('layouts.main-layout')
@section('title')
    Show
@endsection
@section('content')

<div class="d-flex justify-content-between">
    <div class="row-6">
        description: {{$selectApartment -> description}} <br>
        rooms: {{$selectApartment -> rooms}} <br>
        beds: {{$selectApartment -> beds}} <br>
        bathrooms: {{$selectApartment -> bathrooms}} <br>
        square_meters: {{$selectApartment -> square_meters}} <br>
        address: {{$selectApartment -> address}} <br>
        city: {{$selectApartment -> city}} <br>
        {{-- <img class="img img-fluid" src="/storage/apartments_images/{{$selectApartment -> image}}" alt=""> --}}
        <img class="img img-fluid" src="{{$selectApartment -> image}}" alt=""><br>
        <br>Optionals:<br>
        @foreach ($selectApartment -> optionals as $optional)
            {{$optional->name}}<br>
        @endforeach
    </div>
    @if ($selectApartment -> user_id == Auth::user() -> id )
        <div class="row-6">
            <a href="{{route('delete', $selectApartment -> id)}}">Remove</a> <br>
            <a href="">Edit</a> <br>
            <a href="">Sponsorship</a> <br>
        </div>
    @endif
</div>

@endsection