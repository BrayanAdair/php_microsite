<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="generator" content="Astro v4.13.3">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>2Easy | Pagamento</title>
    <meta name="Pagamento 2Easy" content="Astro description">
    <style>
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 14px;
            border: 1px solid transparent;
            border-radius: 1rem;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .dragable[data-astro-cid-mv2qmi5q] {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .dragable[data-astro-cid-mv2qmi5q]::-webkit-scrollbar {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="/_astro/article.DOc-4UcP.css">
    <script type="module" src="/_astro/hoisted.De2duPkC.js"></script>
    <!-- Custom -->
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="bg-gray-800 text-white font-urb w-full">
    <?php
    $page_name = "Payment";
    include '../panel/vistas/web/headerViews.php';
    include '../panel/utils/auth.php';

    $plan = isset($_GET['plan']) ? $_GET['plan'] : 'Silver';
    $price = isset($_GET['price']) ? $_GET['price'] : '24.90';

    ?>
    <section class="container py-16 px-[5%]" data-astro-cid-mv2qmi5q>
        <div class="relative py-16" data-astro-cid-mv2qmi5q>
            <div class="absolute inset-x-0 flex justify-center -top-5" data-astro-cid-mv2qmi5q>
                <div
                    class="w-auto aspect-square mix-blend-overlay bg-white rounded-full blur-2xl md:blur-3xl h-32 md:h-96">
                </div>
            </div>
            <div class="container text-center">
                <h2 class="font-bebas text-4xl  leading-none  text-[33px] md:text-[100px] mb-2 ">completa il TUO
                    PAGAMENTO</h2>
                <span class="text-lg leading-none text-sm md:text-[40px] ">Completa il tuo pagamento per finalizzare
                    l'ordine. Grazie per aver scelto i nostri servizi.</span>
            </div>
        </div>

        <form action="../panel/controladores/server.php" method="POST" id="payment-form" data-astro-cid-mv2qmi5q
            class="flex flex-col gap-4">
            <div id='card-element'></div>

            <div class="rounded-2xl bg-gray-600 p-6 flex flex-col" data-astro-cid-mv2qmi5q>
                <h3 class="text-[28px] md:text-3xl text-center font-bebas" data-astro-cid-mv2qmi5q>
                    Riepilogo dei pagamenti
                </h3>
                <ul class="w-full
                [&>li]:flex
                [&>li]:justify-between
                text-sm md:text-2xl
                flex flex-col
                gap-4 md:gap-8" data-astro-cid-mv2qmi5q>
                    <li data-astro-cid-mv2qmi5q><span data-astro-cid-mv2qmi5q>Plan:</span><span
                            data-astro-cid-mv2qmi5q><?php echo $plan; ?></span></li>
                    <li data-astro-cid-mv2qmi5q><span data-astro-cid-mv2qmi5q>Pagamento del piano:</span><span
                            data-astro-cid-mv2qmi5q>€<?php echo $price; ?></span></li>
                    <li data-astro-cid-mv2qmi5q><span data-astro-cid-mv2qmi5q>Totale da pagare:</span><span
                            data-astro-cid-mv2qmi5q>€<?php echo $price; ?></span></li>
                </ul>
                <div class="text-[10px] md:text-sm mt-auto" data-astro-cid-mv2qmi5q>
                    <label class="flex gap-2 md:gap-4 items-start" data-astro-cid-mv2qmi5q>
                        <input maxlength="25" class="mt-2" type="checkbox" required name="" id=""
                            data-astro-cid-mv2qmi5q>
                        <p class="" data-astro-cid-mv2qmi5q>
                            Accetto le politiche sulla privacy per la raccolta dei dati personali dettagliate nell'
                            <a class="text-primary font-bold text-xs" href="/#" data-astro-cid-mv2qmi5q>T&C</a>
                        </p>
                    </label>
                    <label class="flex gap-2 md:gap-4" data-astro-cid-mv2qmi5q>
                        <input maxlength="25" type="checkbox" required name="" id="" data-astro-cid-mv2qmi5q>
                        <p class="" data-astro-cid-mv2qmi5q>
                            Accetto i termini e le condizioni
                            <a class="text-primary font-bold text-xs" href="/#" data-astro-cid-mv2qmi5q>T&C</a>
                        </p>
                    </label>
                </div>
            </div>

            <button type="submit" class="w-full mt-8 bg-primary p-2.5 px-6 rounded-lg md:text-3xl text-nowrap"
                data-astro-cid-mv2qmi5q>
                Pagamento completo
            </button>

            <div id="card-errors" class="col-span-4 text-xl text-red-500"></div>
        </form>
    </section>
    <script defer src="https://js.stripe.com/v3/"></script>
    <script type="module" src="../panel/assets/js/stripe.js"></script>

    <?php
    include '../panel/vistas/web/footer.php';
    include '../panel/utils/alertas.php';
    ?>
</body>

</html>