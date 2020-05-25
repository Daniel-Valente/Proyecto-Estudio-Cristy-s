<div class="modal fade" id="pagoModal" tabindex="-1" role="dialog" aria-labelledby="formularioPago" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formularioPago">Agregar Pago</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <link href="{{ asset('css/styleCliente.css') }}" rel="stylesheet">
            </div>
            <div class="modal-body">
                <script src="https://js.stripe.com/v3/"></script>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {!! Form::open(['route' => ['orden.pago.store', $orden->id], 'method' => 'POST', 'id' =>
                'payment-form']) !!}
                @csrf
                <div class="form-group">
                    <label for="pago">Monto: </label> <br>
                    {!! Form::number('pago', null, ['class' => 'form-control', 'required']) !!}
                </div> <br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="correo">Nombre: </label> <br>
                        {!! Form:: text('nombre', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="apellido">Apellido: </label> <br>
                        {!! Form:: text('apellido', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="correo">Correo: </label> <br>
                        {!! Form::email('correo', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div> <br>
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

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </div>

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
