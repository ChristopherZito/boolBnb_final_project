@extends('layouts.main-layout')
@section('title')
    Sponsorship
@endsection
@section('content')
<section class="container my-5">
    <h3 class="text-dark">
      Scegli il tuo piano 
    </h3>
    
  {{-------------------------------------------------------------------------------------------------}}
  <div class="wrapper">
    <div class="checkout container">
      <form method="post" id="payment-form" action="{{route('payment', $apartment -> id)}}">
        @method("POST")
        @csrf
        <section>
          <label>
            <span class="input-label">Schegli il tipo di sponsorizzazione</span>
            <div class="input-wrapper amount-wrapper">
              <select class="p-2" name="amount">
                @foreach ($sponsorships as $sponsorship)
                  <option value="{{$sponsorship -> id}}">{{$sponsorship -> description}}</option>
                @endforeach
              </select>
            </div>
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

    </div>
  </div>
</section>  

  {{-------------------------------------------------------------------------------------------------}}
  <script type="application/javascript">
    var form = document.querySelector('#payment-form');
    var client_token = '<?php  echo($clientToken = $gateway->clientToken()->generate())?>';
      // Creazione del Dropin Menu
      braintree.dropin.create({
        authorization: client_token,
        selector: '#bt-dropin',
        //se commentato non appare paypal come metodo di pagamento
        // paypal: {
        //   flow: 'vault'
        // }
      },function (createErr, instance) {
        //! Errore nel caricamento della carta
        if (createErr) {
          console.log('Create Error', createErr);
          return;
        }
        //evento avviato al submit
        form.addEventListener('submit', function (event) {
          alert("event" . event)
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

@endsection