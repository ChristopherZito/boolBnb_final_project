@extends('layouts.main-layout')
@section('title')
    Accedi
@endsection
@section('content')
<section class="d-flex justify-content-around content-login margin-login">
    <div>
        <h1> Accedi: </h1>
        <form action="{{route('login')}}" method="POST">
            @method("POST")
            @csrf

            <label for="email">Email</label><br>
            <input type="email" name="email" required><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" required><br>
            <input class="btn btn-primary m-4" type="submit" value="Login">
        </form>
    </div>
</section>
@endsection