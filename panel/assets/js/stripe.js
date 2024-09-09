var stripe = Stripe('apikey-publica');
    var elements = stripe.elements();
    
    // Crea un elemento de tarjeta y lo monta en el div 'card-element'
    var card = elements.create('card');
    card.mount('#card-element');

    // Maneja los errores del campo de la tarjeta
    card.on('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });

    // Maneja la presentación del formulario
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
      event.preventDefault();

      stripe.createToken(card).then(function(result) {
        if (result.error) {
          // Muestra los errores en el formulario
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;
        } else {
          // Envia el token al servidor
          stripeTokenHandler(result.token);
        }
      });
    });

    // Inserta el token de Stripe en un campo oculto y envía el formulario
    function stripeTokenHandler(token) {
      var form = document.getElementById('payment-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);

      // Envia el formulario
      form.submit();
    }