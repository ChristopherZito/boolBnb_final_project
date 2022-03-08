@extends('layouts.main-layout')
@section('title')
    Sponsorship
@endsection
@section('content')
<section>
    <h4 class="text-dark">
        Sponsor
    </h4>
    @foreach ($sponsorships as $sponsorship)
        <div>
            {{$sponsorship -> description}}
        </div>
    @endforeach

    
</section>
@endsection
