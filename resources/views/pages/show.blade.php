@extends('layouts.main-layout')
@section('title')
    Show
@endsection
@section('content')

<div class="container-fluid style-show">
    <div class="row gx-5 p-4">

        <div class="col-xl col-sm-0 col-laterali">
            <div class="container-fluid ">
                <div class="row box-opt-cont">
                    <div class="col text-center align-items">
                        <h2>
                            Optionals
                        </h2>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col">

                        <div class=" container-fluid optionals-box">
                            @foreach ($selectApartment -> optionals as $optional)
                                {{$optional->name}}<br>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>

        <div class="col-xl-6  col-sm-12 col-centrale">
            <img class="img img-fluid rounded mx-auto d-block" src="{{$selectApartment -> image}}" alt=""><br>
            
            <div class="apart-stats">
                {{$selectApartment -> rooms}} camere.
                {{$selectApartment -> beds}} letti.
                {{$selectApartment -> bathrooms}} bagni.
                {{$selectApartment -> square_meters}} metri quadri<br>
            </div>

            <div class="separator">

            </div>

            <div class="apart-info">
                description: {{$selectApartment -> description}} <br>
                address: {{$selectApartment -> address}} <br>
                city: {{$selectApartment -> city}} <br>
            </div>
            
            <div class="separator">  </div>
                
           
            <div class="user-command">
                @auth
                    @if ($selectApartment -> user_id == Auth::user() -> id )
                        <div class="row-6">
                            <a class="btn btn-primary btn-user-command" href="{{route('delete', $selectApartment -> id)}}">Remove</a> 
                            <a class="btn btn-primary btn-user-command" href="{{route('edit', $selectApartment -> id)}}">Edit</a> 
                            <a class="btn btn-primary btn-user-command" href="">Sponsorship</a> 
                        </div>
                    @endif   
                @endauth
                
            </div>
            {{-- mappa --}}
            <div>
                <maps-component :apartment="{{$selectApartment}}"></maps-component>
            </div>
        </div>
        

        <div class="col-xl col-sm-0 col-laterali">
            <div class="container-fluid ">
                @auth
                    @if ($selectApartment -> user_id == Auth::user() -> id)
                        <div class="row box-opt-cont">
                            <div class="col text-center align-items">
                                <h2>Messaggi Ricevuti</h2>
                            </div>
                        </div>  
                        <div class="row">
                            <ul>
                                @foreach ($messages as $message)
                                <li class="border my-2 p-1">
                                    <h5>{{$message->email_sender}}</h5>
                                    <p>{{$message->text}}</p>
                                </li> 
                            @endforeach
                            </ul>
                        </div>                    
                    @else
                        <div class="row box-opt-cont">
                            <div class="col text-center align-items">
                                <h2>Contatta</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="box-area-sett container">
                                    <form action="{{route('messageStore', $selectApartment-> id)}}" method="post">
                                        @method('POST')
                                        @csrf
                                        {{-- -------------------------------------------- --}}
                                        <input type="email" name="email_sender" value="{{Auth::user() -> email}}">
                                        {{-- -------------------------------------------- --}}
                                        <textarea name='text' placeholder="Contatta il venditore per maggiori informazioni" class="col text-center box-text-area"> </textarea>
                                        <input type="submit" value="Invia">
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="row box-opt-cont">
                        <div class="col text-center align-items"> 
                            <h2>Contatta</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="box-area-sett container">
                                <form action="{{route('messageStore', $selectApartment-> id)}}" method="post">
                                    @method('POST')
                                    @csrf
                                    {{-- -------------------------------------------- --}}
                                    <input type="email" name="email_sender" placeholder="Inserisci la tua mail">
                                    {{-- -------------------------------------------- --}}
                                    <textarea name='text' placeholder="Contatta il venditore per maggiori informazioni" class="col text-center box-text-area"> </textarea>
                                    <input type="submit" value="Invia">
                                </form>
                            </div>
                        </div>
                    </div>
                @endauth   
            </div>
        </div>    
    </div>
</div>
@endsection