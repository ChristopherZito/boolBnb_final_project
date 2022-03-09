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

    <form method="post" id="payment-form" action="{{route('payment')}}">
      @method("POST")
      @csrf
      <section>
        <label for="amount">
          {{-- <span class="input-label">Amount</span>
          <div class="input-wrapper amount-wrapper">
              <input id="amount" name="amount" type="tel" min="1" placeholder="Amount" value="10">
          </div> --}}
          <select class="p-2" name="amount">
            @foreach ($sponsorships as $sponsorship)
              <option value="{{$sponsorship -> price}}">{{$sponsorship -> description}}</option>
            @endforeach
          </select>
        </label>
        {{-- Creazione dropin menu --}}
        <div class="bt-drop-in-wrapper">
          <div id="bt-dropin"></div>
        </div>
      </section>
      {{-- pulsante pagamento --}}
      <input id="nonce" name="payment_method_nonce" type="hidden" />
      <button class="button" type="submit"><span>Abbonati</span></button>
    </form>

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
      }, 

      //! Errore nel caricamento della carta
      function (createErr, instance) {
        if (createErr) {
          console.log('Create Error', createErr);
          return;
        }
        form.addEventListener('submit', function (event) {
          event.preventDefault();

          instance.requestPaymentMethod(function (err, payload) {
            //!Errore nel pagamento o Successo
            if (err) {
              console.log('Request Payment Method Error', err);
              return;
            }
            // Add il #nonce al form e al submit
            document.querySelector('#nonce').value = payload.nonce;
            console.log( "playload",payload);
            form.submit();
          });
        });
      });
  </script>
@endsection