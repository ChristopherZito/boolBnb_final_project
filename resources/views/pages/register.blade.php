@extends('layouts.main-layout')
@section('title')
    Crea Account
@endsection
@section('content')
<section class="d-flex justify-content-around content-register">
    <div>
        <h1> Registrati: </h1>
        <form action="{{route('register')}}" method="POST">
            @method("POST")
            @csrf

            <label for="name">Nome</label><br>
            <input type="text" name="name" placeholder="Nome"><br>
            <label for="surname">Cognome</label><br>
            <input type="text" name="surname" placeholder="Cognome"><br>
            <label for="date_of_birth">Data di nascita</label><br>
            <input type="date" name="date_of_birth" placeholder="Data di nascita"><br>
            <label for="email">* Email</label><br>
            <input type="email" name="email" placeholder="Email" required ><br>
            <label for="password">* Password</label><br>
            <input type="password" name="password" placeholder="Password di almeno 8 caratteri" required><br>
            <label for="password_confirmation">* Conferma Password</label><br>
            <input type="password" name="password_confirmation" placeholder="conferma password" required><br>
            <p>* Campo obbligatorio</p> <br>
            <input class="btn btn-primary m-4" type="submit" value="Register">
        </form>
    </div>
</section>
@endsection