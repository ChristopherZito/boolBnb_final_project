@extends('layouts.main-layout')
@section('title')
    Dashboard
@endsection
@section('content')
    <section class="content-dashboard">

        <div class="style-title">
            <h3 >
                Area Riservata
            </h3>
        </div>
        
       
        @foreach ($apartments as $apartment)
            @if ($apartment -> visibility == 1)
                <div class="container-dashboard">
                    
                    <a href="{{route('show', $apartment -> id )}}">
                        <div class="align-row">
                            <div class="img-container">
                                <img class="img-preview" src="{{$apartment -> image}}" alt="">
                            </div>
                            <div class="container-info">
                                Description: {{$apartment -> description }} <br>
                                Address: {{$apartment -> address}} <br>
                                City: {{$apartment -> city}} <br>
                            </div>
                            
                        </div>
                        
                    </a>
                </div>
                 
                <div class="separator">
                
                </div>
            @endif
        @endforeach


        <div class="style-add-title">
            <h3 >
                Aggiungi Appartamento
            </h3>
        </div>
        <div class="style-add">
            <a class="btn btn-primary btn-user-command"href="{{route('create')}}">ADD</a>
        </div>
    </section>
    
@endsection