@extends('layouts.main-layout')
@section('title')
    Home
@endsection
@section('content')
<section class="style-home ">
  <div id="carouselExampleIndicators" class="carousel slide style-carousel" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active style-img-carousel">
        <img src="https://www.lago.it/wp-content/uploads/2017/10/Lago-Appartamento-Store-Arnhem-1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item style-img-carousel">
        <img src="https://www.barraebarra.com/wp-content/uploads/2020/04/casa-prefabbricata-in-legno-1000x640-1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item style-img-carousel">
        <img src="https://a0.muscache.com/im/pictures/d1b72920-f34c-4dcc-a731-b818eac47567.jpg?im_w=1200" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container">
    <div class="row">
      {{-- @foreach ($sponsoredApartmentsArr as $apartment)
      <div class="col-lg-4 col-sm-12 container-apart-home">
        <a href="{{route('show', $apartment -> id )}}">
          <div class="style-home-spons">
            <img class="img-preview img-home" src="{{$apartment -> image}}" alt="">
          </div>
          <div class="text-home-apart">
            Description: {{$apartment -> description }} <br>
            City: {{$apartment -> city}} <br>
          </div>
        </a>              
      </div>
      @endforeach --}}
    </div>
  </div>

  <div class="container">
    <div class="row">
      @foreach ($apartments as $apartment)
      <div class="col-lg-4 col-sm-12 container-apart-home">
        <a href="{{route('show', $apartment -> id )}}">
          <div class="style-home-spons">
            <img class="img-preview img-home" src="{{$apartment -> image}}" alt="">
          </div>
          <div class="text-home-apart">
            Description: {{$apartment -> description }} <br>
            City: {{$apartment -> city}} <br>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
    
</section>
@endsection