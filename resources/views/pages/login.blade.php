@extends('layouts.main-layout')
@section('title')
    Accedi
@endsection
@section('content')
<section class="d-flex justify-content-around my-5 height-body">
    <div>
        <h1> Login: </h1>
        <form action="{{route('login')}}" method="POST">
            @method("POST")
            @csrf

            <label for="email">Email:</label><br>
            <input type="email" name="email" ><br>
            <label for="password">Password:</label><br>
            <input type="password" name="password" ><br>
            <input class="btn btn-primary m-4" type="submit" value="Login">
        </form>
    </div>
</section>
@endsection