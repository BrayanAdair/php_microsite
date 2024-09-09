document.addEventListener('DOMContentLoaded', function () {
  // ------> PUBLIC KEY AQUI <-------
  const PUBLIC_KEY =
    'pk_test_51PsU6WKmkO926sRH5ttqZsMnSCWLI9BCVDk2KX2dINoZCYlCmHAH9mb6i9uZpTWDFakRy3lwIuJn1VN7VyEokq4N00rG2q6L6b'
  // ------> PUBLIC KEY AQUI <-------

  const stripe = Stripe(PUBLIC_KEY)

  // Obtenemos el precio de las query params
  const searchParams = new URLSearchParams(window.location.search)
  const price = parseFloat(searchParams.get('price'))

  // Opciones
  const options = {
    mode: 'payment',
    currency: 'eur',
    amount: price * 100,
  }

  // Estilos
  const styles = {
    style: {
      base: {
        iconColor: '#666EE8',
        color: '#2e2e2e',
        fontWeight: '500',
        fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
        fontSize: '16px',
        fontSmoothing: 'antialiased',
        ':-webkit-autofill': {
          color: '#2e2e2e',
        },
        '::placeholder': {
          color: '#2e2e2e',
        },
      },
      invalid: {
        iconColor: '#FFC7EE',
        color: '#FFC7EE',
      },
    },
  }

  // Creamos y montamos el elemento
  const elements = stripe.elements(options)
  const card = elements.create('card', styles)
  card.mount('#card-element')

  // Maneja el cambio de tarjeta
  card.on('change', function (event) {
    var displayError = document.getElementById('card-errors')
    if (event.error) {
      displayError.textContent = event.error.message
    } else {
      displayError.textContent = ''
    }
  })

  // Maneja la presentación del formulario
  const form = document.getElementById('payment-form')
  form.addEventListener('submit', async function (event) {
    event.preventDefault()

    const res = await stripe.createToken(card)

    // Muestra los errores en el formulario
    if (res.error) {
      const errorElement = document.getElementById('card-errors')
      errorElement.textContent = res.error.message

      return
    }

    // Envia el token al servidor
    const token = res.token
    stripeTokenHandler(token)
  })

  // Inserta el token de Stripe en un campo oculto y envía el formulario
  function stripeTokenHandler(token) {
    const form = document.getElementById('payment-form')
    const hiddenInput = document.createElement('input')

    hiddenInput.setAttribute('type', 'hidden')
    hiddenInput.setAttribute('name', 'stripeToken')
    hiddenInput.setAttribute('value', token.id)
    form.appendChild(hiddenInput)

    // Envia el formulario
    form.submit()
  }
})
