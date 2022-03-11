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
</head>
<body>
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