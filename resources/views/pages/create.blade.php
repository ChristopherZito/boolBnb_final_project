@extends('layouts.main-layout')
@section('title')
    Aggiungi Appartamento
@endsection
@section('content')
    <div>
        <h1> Aggiungi Appartamento: </h1>
        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
            @method("POST")
            @csrf

            <label for="description">Descrizione:</label><br>
            <textarea  name="description" placeholder="Aggiungi una descriozione dell'appartamento"> </textarea><br>
            <label for="rooms">Numero di Stanze</label><br>
            <input type="number" name="rooms" placeholder="N° stanze"><br>
            <label for="beds">Numero di Letti</label><br>
            <input type="number" name="beds" placeholder="N° letti"><br>
            <label for="bathrooms">Numero di Bagni:</label><br>
            <input type="number" name="bathrooms" placeholder="N° bagni" ><br>
            <label for="square_meters">Metri Quadri:</label><br>
            <input type="number" name="square_meters" placeholder="metri quadri"><br>
            <label for="address">Indirizzo:</label><br>
            <input type="text" name="address" placeholder="Aggiungi Indirizzo"><br>
            <label for="streetNumber">Civico:</label><br>
            <input type="text" name="streetNumber" placeholder="Aggiungi civico"><br>
            <label for="city">Città:</label><br>
            <input type="text" name="city" placeholder="Aggiungi Città"><br><br>
            <label for="image">Immagine:</label>
            <input type="file" name="image" ><br>

            @foreach ($optionals as $optional)
                <input type="checkbox" name="optionals[]" value="{{$optional->id}}">
                <label for="optionals" class="mr-3">{{$optional->name}}</label>
            @endforeach

            <input class="btn btn-primary m-4" type="submit" value="Invia">
        </form>
    </div>
@endsection