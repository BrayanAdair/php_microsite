document.addEventListener('DOMContentLoaded', function () {
  const PUBLIC_KEY = 'API KEY AQUI'
  const stripe = Stripe(PUBLIC_KEY)

  // Obtenemos el precio de las query params
  const searchParams = new URLSearchParams(window.location.search)
  const price = parseFloat(searchParams.get('price'))

  // Opciones
  const options = {
    mode: 'payment',
    currency: 'usd',
    amount: 100 * price,
  }

  // Configuraciones
  const config = {
    layout: {
      type: 'accordion',
      defaultCollapsed: false,
      radios: false,
      spacedAccordionItems: false,
    },
  }

  // Creamos y montamos el elemento
  const elements = stripe.elements(options)
  const paymentElement = elements.create('payment', config)
  paymentElement.mount('#payment-element')

  // Maneja el cambio de tarjeta
  paymentElement.on('change', function (event) {
    var displayError = document.getElementById('payment-errors')
    if (event.error) {
      displayError.textContent = event.error.message
    } else {
      displayError.textContent = ''
    }
  })

  // Maneja la presentación del formulario
  var form = document.getElementById('payment-form')
  form.addEventListener('submit', function (event) {
    event.preventDefault()

    stripe.createToken(paymentElement).then(function (result) {
      if (result.error) {
        // Muestra los errores en el formulario
        var errorElement = document.getElementById('payment-errors')
        errorElement.textContent = result.error.message
      } else {
        // Envia el token al servidor
        stripeTokenHandler(result.token)
      }
    })
  })

  // Inserta el token de Stripe en un campo oculto y envía el formulario
  function stripeTokenHandler(token) {
    var form = document.getElementById('payment-form')
    var hiddenInput = document.createElement('input')
    hiddenInput.setAttribute('type', 'hidden')
    hiddenInput.setAttribute('name', 'stripeToken')
    hiddenInput.setAttribute('value', token.id)
    form.appendChild(hiddenInput)

    // Envia el formulario
    form.submit()
  }
})
