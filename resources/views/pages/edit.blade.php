@extends('layouts.main-layout')
@section('title')
    Modifica appartamento
@endsection
@section('content')
    <div class="style-edit">

        <div class="style-title-edit">
            <h1> Modifica appartamento: </h1>
        </div>
        
        <form action="{{route('update', $apartment->id)}}" method="POST" enctype="multipart/form-data">
            @method("POST")
            @csrf

            <div class="style-form-edit">
                <label for="description">Descrizione:</label><br>
                <textarea  name="description">{{$apartment->description}}</textarea><br>
                <label for="rooms">Numero di Stanze</label><br>
                <input type="number" name="rooms" value="{{$apartment->rooms}}"><br>
                <label for="beds">Numero di Letti</label><br>
                <input type="number" name="beds" value="{{$apartment->beds}}"><br>
                <label for="bathrooms">Numero di Bagni:</label><br>
                <input type="number" name="bathrooms" value="{{$apartment->bathrooms}}"><br>
                <label for="square_meters">Metri Quadri:</label><br>
                <input type="number" name="square_meters" value="{{$apartment->square_meters}}"><br>
                <label for="address">Indirizzo:</label><br>
                <input type="text" name="address" value="{{$apartment->address}}"><br>
                <label for="city">Città:</label><br>
                <input type="text" name="city" value="{{$apartment->city}}"><br><br>
                <label for="image">Immagine:</label>
                <input type="file" name="image"><br>
                <div class="img-container">
                    <h5>Immagine attuale:</h5>
                    <img class="img img-preview" src="{{$apartment -> image}}" alt="">
                </div>
            </div>
            


            <div class="optionals-box">
                @foreach ($optionals as $optional)
                    <input type="checkbox" name="optionals[]" value="{{$optional -> id}}"

                        @foreach ($apartment -> optionals as $optionalApartment)
                            @if ($optional -> id == $optionalApartment -> id)
                                checked
                            @endif
                        @endforeach

                    ><label>{{$optional -> name}}</label><br>
                @endforeach
            </div>
            

            <input class="btn btn-primary m-4" type="submit" value="Aggiorna">
        </form>
    </div>
@endsection