@extends('layouts.main-layout')
@section('title')
    Sponsorship
@endsection
@section('content')
<section class="container my-5">
    <h3 class="text-dark">
        Scegli il tuo piano 
    </h3>
    <div>
        <form action="{{route('payment')}}" method="post">

            @method("POST")
            @csrf

            <select class="p-2" name="price">
                @foreach ($sponsorships as $sponsorship)
                    <option value="{{$sponsorship -> price}}">{{$sponsorship -> description}}</option>
                @endforeach
            </select>
            <div class="py-2">
                <label for="">Numero Carta</label> <br>
                <input type="text" name="card_number" maxlength="16" placeholder="**** **** **** ****">
            </div>
            <div class="py-2">
                <label for="">Scadenza Carta</label> <br>
                <input type="text" name="expiring_date" maxlength="5" placeholder="MM/YY">
            </div>

            <input class="btn btn-success text-light"type="submit" value="Abbonati">
        </form>
    </div>
    
</section>
@endsection
