@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pago
                    <script src="{{ asset('css/styleCliente.js') }}"></script>

                    <script src="https://js.stripe.com/v3/"></script>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    {!! Form::open(['route' => ['pago.store', $orden->id], 'method' => 'POST', 'id' => 'payment-form']) !!}
                    @csrf
                    <div class="form-row">
                    <div class="form-group col-md-4">
                            <label for="categoria">Número de Orden: </label> <br>
                            {!! Form::text('orden_id', $orden, ['value' => $ordens['id']], ['class' => 'forn-control']) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="pago">Monto: </label> <br>
                        {!! Form::number('pago') !!}

                    </div>  <br>
                    <div class="form-row">
                        <label for="card-element">Tarjeta de Crédito o Débito</label> <br>
                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>
                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>

                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Pagar</button>
                    {!! Form::close() !!}

                    <script>
                        // Create a Stripe client.
                        var stripe = Stripe("{{ config('services.stripe.key') }}");

                        // Create an instance of Elements.
                        var elements = stripe.elements();

                        // Custom styling can be passed to options when creating an Element.
                        // (Note that this demo uses a wider set of styles than the guide below.)
                        var style = {
                        base: {
                            color: "#32325D",
                            fontWeight: 500,
                            fontFamily: "Inter UI, Open Sans, Segoe UI, sans-serif",
                            fontSize: "16px",
                            fontSmoothing: "antialiased",
                            '::placeholder': {
                            color: '#aab7c4'
                            }
                        },
                        invalid: {
                            color: '#fa755a',
                            iconColor: '#fa755a'
                        }
                        };

                        // Create an instance of the card Element.
                        var card = elements.create('card', {style: style});

                        // Add an instance of the card Element into the `card-element` <div>.
                        card.mount('#card-element');

                        // Handle real-time validation errors from the card Element.
                        card.addEventListener('change', function(event) {
                        var displayError = document.getElementById('card-errors');
                        if (event.error) {
                            displayError.textContent = event.error.message;
                        } else {
                            displayError.textContent = '';
                        }
                        });

                        // Handle form submission.
                        var form = document.getElementById('payment-form');
                        form.addEventListener('submit', function(event) {
                        event.preventDefault();

                        stripe.createToken(card).then(function(result) {
                            if (result.error) {
                            // Inform the user if there was an error.
                            var errorElement = document.getElementById('card-errors');
                            errorElement.textContent = result.error.message;
                            } else {
                            // Send the token to your server.
                            stripeTokenHandler(result.token);
                            }
                        });
                        });

                        function stripeTokenHandler(token) {
                        // Insert the token ID into the form so it gets submitted to the server
                        var form = document.getElementById('payment-form');
                        var hiddenInput = document.createElement('input');
                        hiddenInput.setAttribute('type', 'hidden');
                        hiddenInput.setAttribute('name', 'stripeToken');
                        hiddenInput.setAttribute('value', token.id);
                        form.appendChild(hiddenInput);

                        // Submit the form
                        form.submit();
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
