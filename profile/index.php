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
    <title>home page</title>
    <meta name="description" content="Astro description">
    <link rel="stylesheet" href="/_astro/article.DOc-4UcP.css">
    <style>
        #carusel[data-astro-cid-7s3qzkcw],
        [data-astro-cid-7s3qzkcw],
        [data-astro-cid-7s3qzkcw]:before,
        [data-astro-cid-7s3qzkcw]:after,
        [data-astro-cid-7s3qzkcw]::-webkit-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none
        }

        #carusel[data-astro-cid-7s3qzkcw]::-webkit-scrollbar {
            display: none
        }
    </style>
    <script type="module" src="/_astro/hoisted.E2OSKBi3.js"></script>
    <!-- alertas -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-800 text-white font-urb min-w-[100vw]">
<?php
    include '../panel/utils/authProfile.php';
    $page_name = "Profile";
    include '../panel/vistas/web/header.php';
?>
    <section class="container px-[10%] my-16">
        <div class="flex w-full justify-center gap-4 items-center my-8"> <span class="text-nowrap 
text-xs md:text-base lg:text-3xl
">Plan Intermedio</span> <a href="/payment" class="curosor-pointer bg-gray-400 px-4 py-1 rounded-3xl  text-gray-100
			flex gap-4 items-center 
			text-nowrap text-xs md:text-sm lg:text-xl
			">
                Mejorar plan
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 12" fill="none">
                    <path d="M0.841248 5.35197L4.81398 1.37924" stroke="#575757" stroke-width="1.31575"></path>
                    <path d="M7.86261 5.35216L3.88988 1.37943" stroke="#575757" stroke-width="1.31575"></path>
                    <line x1="4.36167" y1="1.62137" x2="4.36167" y2="11.1086" stroke="#575757" stroke-width="1.31575">
                    </line>
                </svg> </a> </div>
        <div class="flex flex-col md:flex-row items-center w-full justify-start">
            <div class="w-min">
                <h3 class="font-bebas text-7xl md:text-8xl lg:text-9xl xl:text-[150px] text-nowrap
					animate-slide-in-left">
                    ¡Hola <span class="text-primary">rafael!</span> </h3>
                <p class="text-xl md:text-4xl
				animate-slide-in-left">
                    Subtitulo para indicar alguna información de interés
                </p>
            </div>
            <div class="flex my-16 relative bg-[url('/src/assets/perfil-road.svg')] w-[250px] h-[449px] bg-no-repeat bg-center
			md:scale-125 md:mx-auto
			animate-fade-in-up"> <!-- <img class="invisible" src="/src/assets/perfil-road.svg" alt="">				 -->
                <div class="absolute flex gap-8 items-center top-0 left-[18%]"> <i class="bg-[url('/src/assets/perfil-road-icons.svg')] bg-no-repeat bg-center
					flex rounded-full bg-primary h-14 aspect-square scale-125"></i>
                    <h5 class="text-nowrap">Fase 1</h5>
                </div>
                <div class="absolute flex gap-8 items-center top-[25%] left-[45%]">
                    <h5 class="text-nowrap">Fase 2</h5> <i class="bg-[url('/src/assets/perfil-road-icons.svg')] bg-no-repeat bg-center
					flex rounded-full bg-gray-400 h-14 aspect-square scale-125"></i>
                </div>
                <div class="absolute flex gap-8 items-center top-[49%] left-[25%]"> <i class="bg-[url('/src/assets/perfil-road-icons.svg')] bg-no-repeat bg-center
					flex rounded-full bg-gray-400 h-14 aspect-square scale-125"></i>
                    <h5 class="text-nowrap">Fase 3</h5>
                </div>
                <div class="absolute flex gap-8 items-center top-[65%] left-[45%]">
                    <h5 class="text-nowrap">Fase 4</h5> <i class="bg-[url('/src/assets/perfil-road-icons.svg')] bg-no-repeat bg-center
					flex rounded-full bg-gray-400 h-14 aspect-square scale-125"></i>
                </div>
                <div class="absolute flex gap-8 items-center top-[90%] left-[15%]"> <i class="bg-[url('/src/assets/perfil-road-icons.svg')] bg-no-repeat bg-center
					flex rounded-full bg-gray-400 h-14 aspect-square scale-125"></i>
                    <h5 class="text-nowrap">Fase 5</h5>
                </div>
            </div>
        </div>
        <div class="absolute top-40 grid place-content-center">
            <div class="w-auto aspect-square mix-blend-overlay bg-white rounded-full blur-2xl md:blur-3xl h-32 md:h-96">
            </div>
        </div>
    </section>
    <section class="container px-[10%]" data-astro-cid-7s3qzkcw>
        <h3 class="md:text-[2.5rem]" data-astro-cid-7s3qzkcw>Seguir entrenando</h3>
        <div class="relative" data-astro-cid-7s3qzkcw>
            <div id="carusel"
                class="scroll-smooth  flex overflow-x-scroll md:overflow-x-auto overflow-y-auto gap-6 my-5"
                data-astro-cid-7s3qzkcw> <a href="/article" data-astro-cid-7s3qzkcw>
                    <div class="bg-gray-400 flex-shrink-0 p-4 rounded-lg flex flex-col gap-3 text-center w-min md:gap-8"
                        data-astro-cid-7s3qzkcw>
                        <div class="aspect-[6/4] w-full bg-center bg-cover bg-[url('https://picsum.photos/200/300')] rounded-lg"
                            data-astro-cid-7s3qzkcw></div>
                        <h5 class="font-bebas text-lg md:text-[2.5rem] min-w-[191px] md:min-w-[459px]"
                            data-astro-cid-7s3qzkcw>
                            Horem ipsum dolor sit amet
                        </h5>
                        <p class="text-[10px] md:text-base" data-astro-cid-7s3qzkcw>
                            consectetur adipiscing elit. Etiam eu turpis
                            molestie, dictum est a, mattis tellus. Sed
                            dignissim,
                        </p>
                    </div>
                </a><a href="/article" data-astro-cid-7s3qzkcw>
                    <div class="bg-gray-400 flex-shrink-0 p-4 rounded-lg flex flex-col gap-3 text-center w-min md:gap-8"
                        data-astro-cid-7s3qzkcw>
                        <div class="aspect-[6/4] w-full bg-center bg-cover bg-[url('https://picsum.photos/200/300')] rounded-lg"
                            data-astro-cid-7s3qzkcw></div>
                        <h5 class="font-bebas text-lg md:text-[2.5rem] min-w-[191px] md:min-w-[459px]"
                            data-astro-cid-7s3qzkcw>
                            Horem ipsum dolor sit amet
                        </h5>
                        <p class="text-[10px] md:text-base" data-astro-cid-7s3qzkcw>
                            consectetur adipiscing elit. Etiam eu turpis
                            molestie, dictum est a, mattis tellus. Sed
                            dignissim,
                        </p>
                    </div>
                </a><a href="/article" data-astro-cid-7s3qzkcw>
                    <div class="bg-gray-400 flex-shrink-0 p-4 rounded-lg flex flex-col gap-3 text-center w-min md:gap-8"
                        data-astro-cid-7s3qzkcw>
                        <div class="aspect-[6/4] w-full bg-center bg-cover bg-[url('https://picsum.photos/200/300')] rounded-lg"
                            data-astro-cid-7s3qzkcw></div>
                        <h5 class="font-bebas text-lg md:text-[2.5rem] min-w-[191px] md:min-w-[459px]"
                            data-astro-cid-7s3qzkcw>
                            Horem ipsum dolor sit amet
                        </h5>
                        <p class="text-[10px] md:text-base" data-astro-cid-7s3qzkcw>
                            consectetur adipiscing elit. Etiam eu turpis
                            molestie, dictum est a, mattis tellus. Sed
                            dignissim,
                        </p>
                    </div>
                </a> </div>
            <div id="control-left"
                class="hover:cursor-pointer hover:bg-slate-50 hover:bg-opacity-5 absolute inset-y-0 left-0 z-50  place-content-center h-full w-16 px-2"
                data-astro-cid-7s3qzkcw> <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg" data-astro-cid-7s3qzkcw>
                    <g filter="url(#filter0_b_534_4531)" data-astro-cid-7s3qzkcw>
                        <rect width="31.2374" height="31.2374" rx="15.6187"
                            transform="matrix(-1 0 0 1 31.8555 0.0632019)" fill="#232323" fill-opacity="0.6"
                            data-astro-cid-7s3qzkcw></rect>
                        <path
                            d="M13.8499 15.6819L19.473 10.0588L17.7616 8.34744L10.4272 15.6819L17.7616 23.0164L19.473 21.305L13.8499 15.6819Z"
                            fill="white" data-astro-cid-7s3qzkcw></path>
                    </g>
                    <defs data-astro-cid-7s3qzkcw>
                        <filter id="filter0_b_534_4531" x="-9.38196" y="-9.9368" width="51.2374" height="51.2374"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB" data-astro-cid-7s3qzkcw>
                            <feFlood flood-opacity="0" result="BackgroundImageFix" data-astro-cid-7s3qzkcw></feFlood>
                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="5" data-astro-cid-7s3qzkcw>
                            </feGaussianBlur>
                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_534_4531"
                                data-astro-cid-7s3qzkcw></feComposite>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_534_4531"
                                result="shape" data-astro-cid-7s3qzkcw></feBlend>
                        </filter>
                    </defs>
                </svg> </div>
            <div id="control-right"
                class="hover:cursor-pointer hover:bg-slate-50 hover:bg-opacity-5 absolute inset-y-0 right-0 z-50  place-content-center h-full w-16 px-2"
                data-astro-cid-7s3qzkcw> <svg class="rotate-180" width="32" height="32" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg" data-astro-cid-7s3qzkcw>
                    <g filter="url(#filter0_b_534_4531)" data-astro-cid-7s3qzkcw>
                        <rect width="31.2374" height="31.2374" rx="15.6187"
                            transform="matrix(-1 0 0 1 31.8555 0.0632019)" fill="#232323" fill-opacity="0.6"
                            data-astro-cid-7s3qzkcw></rect>
                        <path
                            d="M13.8499 15.6819L19.473 10.0588L17.7616 8.34744L10.4272 15.6819L17.7616 23.0164L19.473 21.305L13.8499 15.6819Z"
                            fill="white" data-astro-cid-7s3qzkcw></path>
                    </g>
                    <defs data-astro-cid-7s3qzkcw>
                        <filter id="filter0_b_534_4531" x="-9.38196" y="-9.9368" width="51.2374" height="51.2374"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB" data-astro-cid-7s3qzkcw>
                            <feFlood flood-opacity="0" result="BackgroundImageFix" data-astro-cid-7s3qzkcw></feFlood>
                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="5" data-astro-cid-7s3qzkcw>
                            </feGaussianBlur>
                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_534_4531"
                                data-astro-cid-7s3qzkcw></feComposite>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_534_4531"
                                result="shape" data-astro-cid-7s3qzkcw></feBlend>
                        </filter>
                    </defs>
                </svg> </div>
        </div>
    </section>
    <section class="container px-[10%] pb-16">
        <form action="">
            <div class="flex gap-4 my-4 md:my-12 md:gap-8"> <label class="  flex items-center justify-center  bg-gray-600 hover:bg-gray-300 cursor-pointer 
                
                font-bold  
                text-xs py-1 px-3 rounded-3xl
                sm:text-lg sm:py-2 sm:px-6 lg:rounded-[4rem]
                xl:text-3xl xl:py-4 xl:px-10
                "> <span class="text-nowrap">Fase 1</span> <input maxlength="25" class="invisible h-0 w-0" type="radio"
                        name="group1"> </label><label class="  flex items-center justify-center  bg-gray-600 hover:bg-gray-300 cursor-pointer 
                
                font-bold  
                text-xs py-1 px-3 rounded-3xl
                sm:text-lg sm:py-2 sm:px-6 lg:rounded-[4rem]
                xl:text-3xl xl:py-4 xl:px-10
                "> <span class="text-nowrap">Fase 1</span> <input maxlength="25" class="invisible h-0 w-0" type="radio"
                        name="group1"> </label><label class="  flex items-center justify-center  bg-gray-600 hover:bg-gray-300 cursor-pointer 
                
                font-bold  
                text-xs py-1 px-3 rounded-3xl
                sm:text-lg sm:py-2 sm:px-6 lg:rounded-[4rem]
                xl:text-3xl xl:py-4 xl:px-10
                "> <span class="text-nowrap">Fase 1</span> <input maxlength="25" class="invisible h-0 w-0" type="radio"
                        name="group1"> </label>
                <div class=" flex items-center scale-75 md:scale-150"> <custom-dialog class="outline-none">
                        <div class="open"> <i class=""> <svg class="flex my-auto" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1.93357" y="1.28409" width="16.6463" height="16.6463" rx="8.32315"
                                        stroke="#0029FF" stroke-width="2.3537"></rect>
                                    <path
                                        d="M9.04517 7.53674H11.0163V14.1072H9.04517V7.53674ZM10.0439 6.8534C9.75917 6.8534 9.52044 6.75923 9.32771 6.57087C9.13497 6.38252 9.0386 6.14817 9.0386 5.86783C9.0386 5.59187 9.13497 5.35971 9.32771 5.17135C9.52044 4.97862 9.75698 4.88225 10.0373 4.88225C10.3133 4.88225 10.5454 4.97862 10.7338 5.17135C10.9265 5.35971 11.0229 5.59187 11.0229 5.86783C11.0229 6.14817 10.9287 6.38252 10.7404 6.57087C10.5564 6.75923 10.3242 6.8534 10.0439 6.8534Z"
                                        fill="#0029FF"></path>
                                </svg> </i> </div>
                        <dialog class=" outline-none z-20 bg-black bg-opacity-50 h-screen w-screen fixed inset-0
    m-0
    ">
                            <div class="relative z-50 pointer-events-auto  w-full h-full flex items-center">
                                <div
                                    class="max-w-xl mx-[5%] sm:mx-auto flex flex-col gap-6 bg-gray-400 text-white text-center px-8 py-8 rounded-3xl">
                                    <h3 class="font-bebas text-4xl">Formulario enviado</h3>
                                    <p>Te habilitaremos tus lecciones lo más pronto posible, te
                                        avisaremos por medio de Email y mensaje cuando tus clases
                                        personalizadas estén listas en la plataforma</p>
                                    <div class="close"><a class="bg-gray-300 px-8 py-2 rounded-3xl text-xl">
                                            Entendido
                                        </a></div>
                                </div>
                            </div>
                        </dialog>
                    </custom-dialog> </div>
            </div>
        </form>
        <div class="my-4 flex flex-col gap-4">
            <div class="bg-gray-400  p-4 xl:p-8 rounded-lg flex gap-3  w-full h-min"> <img
                    src="https://picsum.photos/200/300"
                    class="aspect-[1/1] h-[100px] xl:h-[293px] bg-center bg-cover  rounded-lg">
                <div class="flex flex-col h-[100px] xl:h-[293px]">
                    <h5 class="font-bebas h-min xl:text-[2.5rem]">
                        Horem ipsum dolor sit amet
                    </h5>
                    <p class="text-[10px] xl:text-2xl  h-full overflow-y-hidden ">
                        consectetur adipiscing elit. Etiam eu turpis
                        molestie, dictum est a, mattis tellus. Sed
                        dignissim, metus nec fringilla accumsan, risus
                        sem sollicitudin lacus, ut interdum tellus elit
                        sed risus.
                    </p>
                </div>
                <div class="hidden sm:flex items-center xl:ml-32 xl:mr-4">
                    <div class="flex gap-2 items-center text-gray-100 xl:scale-150"> <i> <svg
                                xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <path
                                    d="M11.4251 2.23676C16.5546 2.23676 20.7127 6.39481 20.7127 11.5244C20.7127 16.6539 16.5546 20.812 11.4251 20.812C6.29551 20.812 2.13745 16.6539 2.13745 11.5244C2.13745 6.39481 6.29551 2.23676 11.4251 2.23676ZM11.4251 4.09428C9.45447 4.09428 7.5646 4.87708 6.17119 6.2705C4.77778 7.66391 3.99497 9.55377 3.99497 11.5244C3.99497 13.4949 4.77778 15.3848 6.17119 16.7782C7.5646 18.1716 9.45447 18.9544 11.4251 18.9544C13.3956 18.9544 15.2855 18.1716 16.6789 16.7782C18.0723 15.3848 18.8551 13.4949 18.8551 11.5244C18.8551 9.55377 18.0723 7.66391 16.6789 6.2705C15.2855 4.87708 13.3956 4.09428 11.4251 4.09428ZM11.4251 5.9518C11.6525 5.95183 11.8721 6.03534 12.0421 6.18651C12.2121 6.33767 12.3207 6.54597 12.3473 6.77189L12.3538 6.88056V11.1398L14.868 13.654C15.0345 13.8211 15.1312 14.0454 15.1384 14.2813C15.1456 14.5171 15.0628 14.7469 14.9067 14.9239C14.7507 15.1009 14.5331 15.2118 14.2982 15.2342C14.0633 15.2566 13.8287 15.1887 13.642 15.0444L13.5547 14.9673L10.7684 12.181C10.6241 12.0365 10.5314 11.8485 10.5046 11.646L10.4963 11.5244V6.88056C10.4963 6.63423 10.5941 6.398 10.7683 6.22382C10.9425 6.04965 11.1787 5.9518 11.4251 5.9518Z"
                                    fill="#575757"></path>
                            </svg> </i> <span class="text-xs">4Hrs</span> </div>
                </div>
            </div>
            <div class="bg-gray-400  p-4 xl:p-8 rounded-lg flex gap-3  w-full h-min"> <img
                    src="https://picsum.photos/200/300"
                    class="aspect-[1/1] h-[100px] xl:h-[293px] bg-center bg-cover  rounded-lg">
                <div class="flex flex-col h-[100px] xl:h-[293px]">
                    <h5 class="font-bebas h-min xl:text-[2.5rem]">
                        Horem ipsum dolor sit amet
                    </h5>
                    <p class="text-[10px] xl:text-2xl  h-full overflow-y-hidden ">
                        consectetur adipiscing elit. Etiam eu turpis
                        molestie, dictum est a, mattis tellus. Sed
                        dignissim, metus nec fringilla accumsan, risus
                        sem sollicitudin lacus, ut interdum tellus elit
                        sed risus.
                    </p>
                </div>
                <div class="hidden sm:flex items-center xl:ml-32 xl:mr-4">
                    <div class="flex gap-2 items-center text-gray-100 xl:scale-150"> <i> <svg
                                xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <path
                                    d="M11.4251 2.23676C16.5546 2.23676 20.7127 6.39481 20.7127 11.5244C20.7127 16.6539 16.5546 20.812 11.4251 20.812C6.29551 20.812 2.13745 16.6539 2.13745 11.5244C2.13745 6.39481 6.29551 2.23676 11.4251 2.23676ZM11.4251 4.09428C9.45447 4.09428 7.5646 4.87708 6.17119 6.2705C4.77778 7.66391 3.99497 9.55377 3.99497 11.5244C3.99497 13.4949 4.77778 15.3848 6.17119 16.7782C7.5646 18.1716 9.45447 18.9544 11.4251 18.9544C13.3956 18.9544 15.2855 18.1716 16.6789 16.7782C18.0723 15.3848 18.8551 13.4949 18.8551 11.5244C18.8551 9.55377 18.0723 7.66391 16.6789 6.2705C15.2855 4.87708 13.3956 4.09428 11.4251 4.09428ZM11.4251 5.9518C11.6525 5.95183 11.8721 6.03534 12.0421 6.18651C12.2121 6.33767 12.3207 6.54597 12.3473 6.77189L12.3538 6.88056V11.1398L14.868 13.654C15.0345 13.8211 15.1312 14.0454 15.1384 14.2813C15.1456 14.5171 15.0628 14.7469 14.9067 14.9239C14.7507 15.1009 14.5331 15.2118 14.2982 15.2342C14.0633 15.2566 13.8287 15.1887 13.642 15.0444L13.5547 14.9673L10.7684 12.181C10.6241 12.0365 10.5314 11.8485 10.5046 11.646L10.4963 11.5244V6.88056C10.4963 6.63423 10.5941 6.398 10.7683 6.22382C10.9425 6.04965 11.1787 5.9518 11.4251 5.9518Z"
                                    fill="#575757"></path>
                            </svg> </i> <span class="text-xs">4Hrs</span> </div>
                </div>
            </div>
            <div class="bg-gray-400  p-4 xl:p-8 rounded-lg flex gap-3  w-full h-min"> <img
                    src="https://picsum.photos/200/300"
                    class="aspect-[1/1] h-[100px] xl:h-[293px] bg-center bg-cover  rounded-lg">
                <div class="flex flex-col h-[100px] xl:h-[293px]">
                    <h5 class="font-bebas h-min xl:text-[2.5rem]">
                        Horem ipsum dolor sit amet
                    </h5>
                    <p class="text-[10px] xl:text-2xl  h-full overflow-y-hidden ">
                        consectetur adipiscing elit. Etiam eu turpis
                        molestie, dictum est a, mattis tellus. Sed
                        dignissim, metus nec fringilla accumsan, risus
                        sem sollicitudin lacus, ut interdum tellus elit
                        sed risus.
                    </p>
                </div>
                <div class="hidden sm:flex items-center xl:ml-32 xl:mr-4">
                    <div class="flex gap-2 items-center text-gray-100 xl:scale-150"> <i> <svg
                                xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <path
                                    d="M11.4251 2.23676C16.5546 2.23676 20.7127 6.39481 20.7127 11.5244C20.7127 16.6539 16.5546 20.812 11.4251 20.812C6.29551 20.812 2.13745 16.6539 2.13745 11.5244C2.13745 6.39481 6.29551 2.23676 11.4251 2.23676ZM11.4251 4.09428C9.45447 4.09428 7.5646 4.87708 6.17119 6.2705C4.77778 7.66391 3.99497 9.55377 3.99497 11.5244C3.99497 13.4949 4.77778 15.3848 6.17119 16.7782C7.5646 18.1716 9.45447 18.9544 11.4251 18.9544C13.3956 18.9544 15.2855 18.1716 16.6789 16.7782C18.0723 15.3848 18.8551 13.4949 18.8551 11.5244C18.8551 9.55377 18.0723 7.66391 16.6789 6.2705C15.2855 4.87708 13.3956 4.09428 11.4251 4.09428ZM11.4251 5.9518C11.6525 5.95183 11.8721 6.03534 12.0421 6.18651C12.2121 6.33767 12.3207 6.54597 12.3473 6.77189L12.3538 6.88056V11.1398L14.868 13.654C15.0345 13.8211 15.1312 14.0454 15.1384 14.2813C15.1456 14.5171 15.0628 14.7469 14.9067 14.9239C14.7507 15.1009 14.5331 15.2118 14.2982 15.2342C14.0633 15.2566 13.8287 15.1887 13.642 15.0444L13.5547 14.9673L10.7684 12.181C10.6241 12.0365 10.5314 11.8485 10.5046 11.646L10.4963 11.5244V6.88056C10.4963 6.63423 10.5941 6.398 10.7683 6.22382C10.9425 6.04965 11.1787 5.9518 11.4251 5.9518Z"
                                    fill="#575757"></path>
                            </svg> </i> <span class="text-xs">4Hrs</span> </div>
                </div>
            </div>
            <div class="bg-gray-400  p-4 xl:p-8 rounded-lg flex gap-3  w-full h-min"> <img
                    src="https://picsum.photos/200/300"
                    class="aspect-[1/1] h-[100px] xl:h-[293px] bg-center bg-cover  rounded-lg">
                <div class="flex flex-col h-[100px] xl:h-[293px]">
                    <h5 class="font-bebas h-min xl:text-[2.5rem]">
                        Horem ipsum dolor sit amet
                    </h5>
                    <p class="text-[10px] xl:text-2xl  h-full overflow-y-hidden ">
                        consectetur adipiscing elit. Etiam eu turpis
                        molestie, dictum est a, mattis tellus. Sed
                        dignissim, metus nec fringilla accumsan, risus
                        sem sollicitudin lacus, ut interdum tellus elit
                        sed risus.
                    </p>
                </div>
                <div class="hidden sm:flex items-center xl:ml-32 xl:mr-4">
                    <div class="flex gap-2 items-center text-gray-100 xl:scale-150"> <i> <svg
                                xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <path
                                    d="M11.4251 2.23676C16.5546 2.23676 20.7127 6.39481 20.7127 11.5244C20.7127 16.6539 16.5546 20.812 11.4251 20.812C6.29551 20.812 2.13745 16.6539 2.13745 11.5244C2.13745 6.39481 6.29551 2.23676 11.4251 2.23676ZM11.4251 4.09428C9.45447 4.09428 7.5646 4.87708 6.17119 6.2705C4.77778 7.66391 3.99497 9.55377 3.99497 11.5244C3.99497 13.4949 4.77778 15.3848 6.17119 16.7782C7.5646 18.1716 9.45447 18.9544 11.4251 18.9544C13.3956 18.9544 15.2855 18.1716 16.6789 16.7782C18.0723 15.3848 18.8551 13.4949 18.8551 11.5244C18.8551 9.55377 18.0723 7.66391 16.6789 6.2705C15.2855 4.87708 13.3956 4.09428 11.4251 4.09428ZM11.4251 5.9518C11.6525 5.95183 11.8721 6.03534 12.0421 6.18651C12.2121 6.33767 12.3207 6.54597 12.3473 6.77189L12.3538 6.88056V11.1398L14.868 13.654C15.0345 13.8211 15.1312 14.0454 15.1384 14.2813C15.1456 14.5171 15.0628 14.7469 14.9067 14.9239C14.7507 15.1009 14.5331 15.2118 14.2982 15.2342C14.0633 15.2566 13.8287 15.1887 13.642 15.0444L13.5547 14.9673L10.7684 12.181C10.6241 12.0365 10.5314 11.8485 10.5046 11.646L10.4963 11.5244V6.88056C10.4963 6.63423 10.5941 6.398 10.7683 6.22382C10.9425 6.04965 11.1787 5.9518 11.4251 5.9518Z"
                                    fill="#575757"></path>
                            </svg> </i> <span class="text-xs">4Hrs</span> </div>
                </div>
            </div>
            <div class="bg-gray-400  p-4 xl:p-8 rounded-lg flex gap-3  w-full h-min"> <img
                    src="https://picsum.photos/200/300"
                    class="aspect-[1/1] h-[100px] xl:h-[293px] bg-center bg-cover  rounded-lg">
                <div class="flex flex-col h-[100px] xl:h-[293px]">
                    <h5 class="font-bebas h-min xl:text-[2.5rem]">
                        Horem ipsum dolor sit amet
                    </h5>
                    <p class="text-[10px] xl:text-2xl  h-full overflow-y-hidden ">
                        consectetur adipiscing elit. Etiam eu turpis
                        molestie, dictum est a, mattis tellus. Sed
                        dignissim, metus nec fringilla accumsan, risus
                        sem sollicitudin lacus, ut interdum tellus elit
                        sed risus.
                    </p>
                </div>
                <div class="hidden sm:flex items-center xl:ml-32 xl:mr-4">
                    <div class="flex gap-2 items-center text-gray-100 xl:scale-150"> <i> <svg
                                xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="none">
                                <path
                                    d="M11.4251 2.23676C16.5546 2.23676 20.7127 6.39481 20.7127 11.5244C20.7127 16.6539 16.5546 20.812 11.4251 20.812C6.29551 20.812 2.13745 16.6539 2.13745 11.5244C2.13745 6.39481 6.29551 2.23676 11.4251 2.23676ZM11.4251 4.09428C9.45447 4.09428 7.5646 4.87708 6.17119 6.2705C4.77778 7.66391 3.99497 9.55377 3.99497 11.5244C3.99497 13.4949 4.77778 15.3848 6.17119 16.7782C7.5646 18.1716 9.45447 18.9544 11.4251 18.9544C13.3956 18.9544 15.2855 18.1716 16.6789 16.7782C18.0723 15.3848 18.8551 13.4949 18.8551 11.5244C18.8551 9.55377 18.0723 7.66391 16.6789 6.2705C15.2855 4.87708 13.3956 4.09428 11.4251 4.09428ZM11.4251 5.9518C11.6525 5.95183 11.8721 6.03534 12.0421 6.18651C12.2121 6.33767 12.3207 6.54597 12.3473 6.77189L12.3538 6.88056V11.1398L14.868 13.654C15.0345 13.8211 15.1312 14.0454 15.1384 14.2813C15.1456 14.5171 15.0628 14.7469 14.9067 14.9239C14.7507 15.1009 14.5331 15.2118 14.2982 15.2342C14.0633 15.2566 13.8287 15.1887 13.642 15.0444L13.5547 14.9673L10.7684 12.181C10.6241 12.0365 10.5314 11.8485 10.5046 11.646L10.4963 11.5244V6.88056C10.4963 6.63423 10.5941 6.398 10.7683 6.22382C10.9425 6.04965 11.1787 5.9518 11.4251 5.9518Z"
                                    fill="#575757"></path>
                            </svg> </i> <span class="text-xs">4Hrs</span> </div>
                </div>
            </div>
        </div> <button
            class="md:scale-125 md:my-8 mx-auto text-base font-bold rounded-xl flex items-center justify-center px-4 py-1 bg-gray-600 hover:bg-gray-300 cursor-pointer">
            ver mas</button>
    </section>
<?php
    include '../panel/vistas/web/footer.php';
    include '../panel/utils/alertas.php';
?>
</body>

</html>