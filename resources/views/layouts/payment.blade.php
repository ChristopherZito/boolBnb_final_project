<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sponsorship</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://js.braintreegateway.com/web/dropin/1.8.1/js/dropin.min.js"></script>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{asset('js/app.js')}}" defer></script>
</head>
<body>
  <header id="position-header">

    <nav class="navbar navbar-expand-sm navbar-light color-header ">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{route('home')}}">
              <img id="style-logo" src="{{asset('storage/apartments_images/logo b&b.png')}}" alt="">

              <span class="style-text-logo">5 Heroes <br> B&B</span>
              
            </a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            
            <div class="search-center ">
                <form class="d-flex" action="{{route('search')}}" method="post" >
                    @method("POST")
                    @csrf
                  <input id="phone-style" class="form-control me-2" type="search" name="city" placeholder="Inserisci città" aria-label="Search">
                  <button class="btn btn-outline-success phone-style" type="submit">Cerca</button>
                </form>
            </div>
            


            <div class="account">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Account
                        </a>
                        @auth
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('home')}}">Home</a></li>
                            <li><a class="dropdown-item" href="{{route('dashboard')}}">Profilo</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route('logout')}}">Disconetti</a></li>
                          </ul>
                        @endauth
                        @guest
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>          
                          </ul>
                        @endguest

                      </li>
                </ul>

                @auth
                  Benvenuto
                    @if (Auth::user() -> name)
                      {{Auth::user() -> name}}
                    @else
                      {{Auth::user() -> email}}
                    @endif
                  @endauth
            </div>
            
          </div>
        </div>
      </nav>

      
      <div class="search-phone ">
        <form class="d-flex" action="{{route('search')}}" method="post" >
            @method("POST")
            @csrf
          <input id="smart-phone" class="form-control me-2" type="search" name="city" placeholder="Inserisci città" aria-label="Search">
          <button class="btn btn-outline-success smart-phone" type="submit">Cerca</button>
        </form>
      </div>
    
</header>
  <div class="container">

     
     <form method="post" id="payment-form" action="{{route('payment.process', $apartment -> id)}}">
        @method("POST")
        @csrf
        <section>
          <label>
            <label>
                <span class="input-label">Scegli il tipo di sponsorizzazione</span>
                <div class="input-wrapper amount-wrapper">
                    <select class="p-2" name="amount">
                        @foreach ($sponsorships as $sponsorship)
                          <option value="{{$sponsorship -> id}}">{{$sponsorship -> description}}</option>
                        @endforeach
                    </select>
                </div>
              </label>
          </label>
          {{-- Creazione dropin menu --}}
          <div class="bt-drop-in-wrapper">
            <div id="bt-dropin"></div>
          </div>
        </section>
        {{-- pulsante pagamento --}}
        <input id="nonce" name="payment_method_nonce" type="hidden"/>
        <button class="button text-light btn btn-success" type="submit"><span>Abbonati</span></button>
      </form>
      {{-------------------------------------------------------------------------------------------------}}
  <script type="application/javascript">
    var form = document.querySelector('#payment-form');
    var client_token = '<?php  echo($clientToken)?>';
      // Creazione del Dropin Menu
      braintree.dropin.create({
        authorization: client_token,
        selector: '#bt-dropin',
      },function (createErr, instance) {
        //! Errore nel caricamento della carta
        if (createErr) {
          console.log('Create Error', createErr);
          // alert(createErr)
          return;
        }
        //evento avviato al submit
        form.addEventListener('submit', function (event) {
          event.preventDefault();
          instance.requestPaymentMethod(function (err, payload) {
            //!Errore nel pagamento
            if (err) {
              console.log('Request Payment Method Error', err);
              return;
            }
            // Add the #nonce to the form and submit
            document.querySelector('#nonce').value = payload.nonce;
            form.submit();
          });
        });
      });
  </script>
  </div>
</body>
</html>