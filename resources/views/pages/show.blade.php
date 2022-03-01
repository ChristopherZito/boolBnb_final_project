@extends('layouts.main-layout')
@section('title')
    Show
@endsection
@section('content')

<div class="container-fluid">
    <div class="row gx-5 p-4">

        <div class="col-xl col-sm-0 col-laterali">
            <div class="container-fluid">
                <div class="row">
                    <div class="col text-center">
                        <h2>
                            Optionals
                        </h2>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col">
                        @foreach ($selectApartment -> optionals as $optional)
                            {{$optional->name}}<br>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>

        <div class="col-xl-6  col-sm-12 col-centrale">
            <img class="img img-fluid rounded mx-auto d-block" src="{{$selectApartment -> image}}" alt=""><br>
            
            <div class="apart-stats">
                {{$selectApartment -> rooms}} camere .
                {{$selectApartment -> beds}} letti .
                {{$selectApartment -> bathrooms}} bagni .
                {{$selectApartment -> square_meters}} metri quadri<br>
            </div>

            <div class="apart-info">
                description: {{$selectApartment -> description}} <br>
                address: {{$selectApartment -> address}} <br>
                city: {{$selectApartment -> city}} <br>
            </div>
            
            <div class="user-command">
                @if ($selectApartment -> user_id == Auth::user() -> id )
                    <div class="row-6">
                        <a class="btn btn-primary" href="{{route('delete', $selectApartment -> id)}}">Remove</a> 
                        <a class="btn btn-primary" href="{{route('edit', $selectApartment -> id)}}">Edit</a> 
                        <a class="btn btn-primary" href="">Sponsorship</a> 
                    </div>
                @endif
            </div>
            
        </div>
        

        <div class="col-xl col-sm-0 col-laterali">
            contatta:<br>
        </div>
    </div>
</div>
{{-- <div class="container-show-content">
    <div class="container p-4">
        Optionals:<br>
        @foreach ($selectApartment -> optionals as $optional)
            {{$optional->name}}<br>
        @endforeach
    </div>
    <div class="container  p-4">
        <div class="row-6">
            <img class="img img-fluid" src="{{$selectApartment -> image}}" alt=""><br>
            description: {{$selectApartment -> description}} <br>
            rooms: {{$selectApartment -> rooms}} <br>
            beds: {{$selectApartment -> beds}} <br>
            bathrooms: {{$selectApartment -> bathrooms}} <br>
            square_meters: {{$selectApartment -> square_meters}} <br>
            address: {{$selectApartment -> address}} <br>
            city: {{$selectApartment -> city}} <br>
            
            
            
        </div>
        @if ($selectApartment -> user_id == Auth::user() -> id )
            <div class="row-6">
                <a class="btn btn-primary" href="{{route('delete', $selectApartment -> id)}}">Remove</a> <br>
                <a class="btn btn-primary" href="{{route('edit', $selectApartment -> id)}}">Edit</a> <br>
                <a class="btn btn-primary" href="">Sponsorship</a> <br>
            </div>
        @endif
    </div>

    <div class="container p-4">
        contatta:<br>
        
    </div>
</div> --}}


@endsection