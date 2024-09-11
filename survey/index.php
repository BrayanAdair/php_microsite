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
    <title>2Easy | Sondaggio</title>
    <meta name="description" content="Astro description">
    <link rel="stylesheet" href="/_astro/article.DOc-4UcP.css">
    <style>
        input[data-astro-cid-6wvssxk3] {
            display: block;
            width: 100%;
            border-radius: .5rem;
            border-color: transparent;
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity));
            padding: .625rem;
            font-size: .875rem;
            line-height: 1.25rem;
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        input[data-astro-cid-6wvssxk3]:focus {
            --tw-border-opacity: 1;
            border-color: rgb(59 130 246 / var(--tw-border-opacity));
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(59 130 246 / var(--tw-ring-opacity))
        }

        @media (prefers-color-scheme: dark) {
            input[data-astro-cid-6wvssxk3] {
                --tw-bg-opacity: 1;
                background-color: rgb(var(--dark-2) / var(--tw-bg-opacity));
                --tw-text-opacity: 1;
                color: rgb(var(--white) / var(--tw-text-opacity))
            }

            input[data-astro-cid-6wvssxk3]::-moz-placeholder {
                --tw-placeholder-opacity: 1;
                color: rgb(var(--grey-1) / var(--tw-placeholder-opacity))
            }

            input[data-astro-cid-6wvssxk3]::placeholder {
                --tw-placeholder-opacity: 1;
                color: rgb(var(--grey-1) / var(--tw-placeholder-opacity))
            }

            input[data-astro-cid-6wvssxk3]:focus {
                --tw-border-opacity: 1;
                border-color: rgb(59 130 246 / var(--tw-border-opacity));
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(59 130 246 / var(--tw-ring-opacity))
            }
        }

        label[data-astro-cid-6wvssxk3] {
            display: flex;
            width: 100%;
            flex-direction: column;
            text-align: center
        }

        label[data-astro-cid-6wvssxk3]:has(input[type=radio]:checked) {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--blue) / var(--tw-bg-opacity))
        }
    </style>
    <script type="module" src="/_astro/hoisted.De2duPkC.js"></script>
    <!-- alertas -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-800 text-white font-urb min-w-[100vw]">
    <?php
    include '../panel/utils/authSurvey.php';
    $page_name = "Survey";
    include '../panel/vistas/web/headerViews.php';

    ?>
    <section class="container py-16 px-[5%]">
        <div class="relative py-16">
            <div class="absolute inset-x-0 flex justify-center -top-5">
                <div
                    class="w-auto aspect-square mix-blend-overlay bg-white rounded-full blur-2xl md:blur-3xl h-32 md:h-96">
                </div>
            </div>
            <div class="container text-center">
                <h2 class="font-bebas text-4xl  leading-none  text-[33px] md:text-[100px]  ">Questionario di valutazione
                    da
                    Questionario di valutazione del livello di abilità in sala pesi</h2> <span
                    class="text-xl leading-none  md:text-[40px] ">Compilare
                    questo questionario per poter personalizzare in modo più efficace gli esercizi e le lezioni che
                    vedrete.
                    vedrete.</span>
            </div>
        </div>
        <form action="../panel/controladores/postSurvey.php" method="POST"
            class="flex flex-col gap-8 md:gap-12 leading-none md:px-[10%]">
            <h4 class="mt-16  text-[22px] md:text-[50px] text-center font-bebas">
                Esperienza generale
            </h4> <!-- select -->
            <fieldset class="" data-astro-cid-6wvssxk3>
                <legend class="text-center md:text-3xl" data-astro-cid-6wvssxk3>Da quanto tempo si allena regolarmente
                    regolarmente in palestra?</legend>
                <div class="flex flex-col md:flex-row gap-2 md:gap-4 my-11" data-astro-cid-6wvssxk3> <label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Meno di 6 mesi</span> <input
                            maxlength="25" class="invisible h-0 w-0" value="Meno di 6 mesi" type="radio" name="q1resp1"
                            data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>6 Mesi - 2 Anni</span> <input
                            maxlength="25" class="invisible h-0 w-0" value="6 Mesi - 2 Anni" type="radio" name="q1resp2"
                            data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Più di 2 anni</span> <input
                            maxlength="25" class="invisible h-0 w-0" value="Più di 2 anni" type="radio" name="q1resp3"
                            data-astro-cid-6wvssxk3> </label> </div>
            </fieldset>

            <fieldset class="" data-astro-cid-6wvssxk3>
                <legend class="text-center md:text-3xl" data-astro-cid-6wvssxk3>Quanto spesso si allena in palestra ogni
                    settimana?
                    palestra ogni settimana?</legend>
                <div class="flex flex-col md:flex-row gap-2 md:gap-4 my-11" data-astro-cid-6wvssxk3> <label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>1-2 Tempi</span> <input maxlength="25"
                            class="invisible h-0 w-0" value="1-2 Tempi" type="radio" name="q2resp1"
                            data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>6 Mesi - 2 Anni</span> <input
                            maxlength="25" class="invisible h-0 w-0" value="6 Mesi - 2 Anni" type="radio" name="q2resp2"
                            data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Più di 2 anni</span> <input
                            maxlength="25" class="invisible h-0 w-0" value="Più di 2 anni" type="radio" name="q2resp3"
                            data-astro-cid-6wvssxk3> </label> </div>
            </fieldset>

            <fieldset class="" data-astro-cid-6wvssxk3>
                <legend class="text-center md:text-3xl" data-astro-cid-6wvssxk3>Qual è il suo livello di fiducia
                    nell'eseguire correttamente
                    i seguenti esercizi (Squat con bilanciere, Deadlift, Bench Press con bilanciere, Military Press con
                    bilanciere)?</legend>
                <div class="flex flex-col md:flex-row gap-2 md:gap-4 my-11" data-astro-cid-6wvssxk3> <label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Non li ho mai provati / ho bisogno di
                            assistenza costante</span> <input maxlength="25" class="invisible h-0 w-0" value="Non li ho mai provati / ho bisogno di
                        assistenza costante" type="radio" name="q3resp1" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Ho dimestichezza, ma ho bisogno di
                            di una supervisione occasionale</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="Ho dimestichezza, ma ho bisogno di
                        di una supervisione occasionale" type="radio" name="q3resp2" data-astro-cid-6wvssxk3>
                    </label><label class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sono molto sicuro di me e li eseguo
                            regolarmente senza supervisione</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="Sono molto sicuro di me e li eseguo
                        regolarmente senza supervisione" type="radio" name="q3resp3" data-astro-cid-6wvssxk3> </label>
                </div>
            </fieldset>

            <fieldset class="" data-astro-cid-6wvssxk3>
                <legend class="text-center md:text-3xl" data-astro-cid-6wvssxk3>Ha mai partecipato a programmi di allenamento strutturati
                    programmi di allenamento strutturati (ad esempio programmi di forza, bodybuilding, powerlifting)?
                </legend>
                <div class="flex flex-col md:flex-row gap-2 md:gap-4 my-11" data-astro-cid-6wvssxk3> <label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>No, mai</span> <input maxlength="25"
                            class="invisible h-0 w-0" value="No, mai" type="radio" name="q4resp1"
                            data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sì, ma solo per brevi periodi</span>
                        <input maxlength="25" class="invisible h-0 w-0" value="Sì, ma solo per brevi periodi"
                            type="radio" name="q4resp2" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sì, per un periodo prolungato</span>
                        <input maxlength="25" class="invisible h-0 w-0" value="Sì, per un periodo prolungato"
                            type="radio" name="q4resp3" data-astro-cid-6wvssxk3> </label> </div>
            </fieldset>

            <h4 class="mt-16  text-[22px] md:text-[50px] text-center font-bebas">
                Conoscenza della programmazione della formazione
            </h4>
            <fieldset class="" data-astro-cid-6wvssxk3>
                <legend class="text-center md:text-3xl" data-astro-cid-6wvssxk3>Siete in grado di creare e adattare un programma di allenamento in base ai vostri obiettivi?</legend>
                <div class="flex flex-col md:flex-row gap-2 md:gap-4 my-11" data-astro-cid-6wvssxk3> <label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>No, mi affido a programmi prestabiliti o formatori</span> <input maxlength="25" class="invisible h-0 w-0" value="No, mi affido a programmi prestabiliti
                            o formatori" type="radio" name="q5resp1" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sì, ma con capacità limitate di modificare e adattare</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="Sí, pero con habilidades limitadas para modificar y adaptar" type="radio"
                            name="q5resp2" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sì, con un'eccellente comprensione delle variabili dell'allenamento (volume, intensità, frequenza).</span> <input maxlength="25"
                            class="invisible h-0 w-0" value="Sì, con un'eccellente comprensione delle
                        variabili dell'allenamento (volume, intensità, frequenza)." type="radio" name="q5resp3"
                            data-astro-cid-6wvssxk3> </label> </div>
            </fieldset>

            <fieldset class="" data-astro-cid-6wvssxk3>
                <legend class="text-center md:text-3xl" data-astro-cid-6wvssxk3> Conoscete i principi della
                    di periodizzazione e li applicate nel vostro allenamento?</legend>
                <div class="flex flex-col md:flex-row gap-2 md:gap-4 my-11" data-astro-cid-6wvssxk3> <label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>No, non conosco questi concetti</span>
                        <input maxlength="25" class="invisible h-0 w-0" value="No, non conosco questi concetti"
                            type="radio" name="q6resp1" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sì, ho una conoscenza di base e occasionalmente le applico</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="Sì, ho una conoscenza di base e occasionalmente le applico" type="radio"
                            name="q6resp2" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sì, ne ho una conoscenza approfondita e li uso regolarmente</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="Sì, ne ho una conoscenza approfondita e li uso regolarmente" type="radio"
                            name="q6resp3" data-astro-cid-6wvssxk3> </label> </div>
            </fieldset>

            <h4 class="mt-16  text-[22px] md:text-[50px] text-center font-bebas">
                Conoscenza delle progressioni e dell'adattamento
            </h4>
            <fieldset class="" data-astro-cid-6wvssxk3>
                <legend class="text-center md:text-3xl" data-astro-cid-6wvssxk3>Come controllate i vostri progressi in
                    palestra?</legend>
                <div class="flex flex-col md:flex-row gap-2 md:gap-4 my-11" data-astro-cid-6wvssxk3> <label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Non monitorare i progressi</span> <input
                            maxlength="25" class="invisible h-0 w-0" value="Non monitorare i progressi" type="radio"
                            name="q7resp1" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Di tanto in tanto verifico il peso
                            sollevato o il numero di ripetizioni.</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="Di tanto in tanto verifico il peso
                            sollevato o il numero di ripetizioni." type="radio" name="q7resp2" data-astro-cid-6wvssxk3>
                    </label><label class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Tengo un diario di allenamento
                            dettagliato
                            e monitoro costantemente i progressi</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="Tengo un diario di allenamento
                            dettagliato
                            e monitoro costantemente i progressi" type="radio" name="q7resp3" data-astro-cid-6wvssxk3>
                    </label> </div>
            </fieldset>

            <fieldset class="" data-astro-cid-6wvssxk3>
                <legend class="text-center md:text-3xl" data-astro-cid-6wvssxk3>Siete in grado di identificare e
                    correggere
                    da soli eventuali errori nella tecnica di esercizio?</legend>
                <div class="flex flex-col md:flex-row gap-2 md:gap-4 my-11" data-astro-cid-6wvssxk3> <label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>No, sono completamente dipendente dal
                            feedback di
                            un formatore</span> <input maxlength="25" class="invisible h-0 w-0" value="No, sono completamente dipendente dal
                            feedback di
                            un formatore" type="radio" name="q8resp1" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sì, ma a volte ho bisogno della conferma
                            di
                            un esperto</span> <input maxlength="25" class="invisible h-0 w-0" value="Sì, ma a volte ho bisogno della conferma
                            di
                            un esperto" type="radio" name="q8resp2" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sì, sono consapevole dei miei errori e so
                            come correggerli.</span> <input maxlength="25" class="invisible h-0 w-0" value="Sì, sono consapevole dei miei errori e so
                            come correggerli." type="radio" name="q8resp3" data-astro-cid-6wvssxk3> </label> </div>
            </fieldset>
            <button type="submit" data-modal-target="static-modal" data-modal-toggle="static-modal"
                class="mt-8 bg-primary p-2.5 px-6 rounded-lg md:text-3xl text-nowrap mx-auto">
                Inviare il modulo
            </button>
        </form>
    </section>
    <?php
    include '../panel/vistas/web/footer.php';
    include '../panel/utils/alertas.php';
    ?>
</body>

</html>