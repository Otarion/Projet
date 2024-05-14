<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv=X-UA-Compatible content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Judson:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">      
        <link rel="stylesheet" href="./resources/css/styles.css" type="text/css"/>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-judson lg:bg-[#a5a5a5] bg-white">

{{-- Header --}}
    <header x-data="{searchOpen: false, menuOpen:false,}" x-cloak>

        {{-- Banderole PC/tablette --}}
    <div class="max-lg:hidden h-28 text-center items-center flex justify-center bg-[#87736a]">
        <a>
            <img src="image/logo/logonoir.png" class="content-start ml-4 mr-40 h-20" alt="logo-oa">
        </a>
        <span class="text-white text-7xl flex-grow mx-auto w-2/3 font-bold">L'Odyssée d'Adénone</span>
                
            {{-- Barre de recherche pour PC/tablette--}}
                <div 
                style="padding: 0.5rem; height: 2em; width: 15em;"
                class="mr-1 top-9 relative flex items-center bg-white border border-white-1">
                    <input type="text" placeholder="Rechercher..." style="width: 12em;">
                    <button>🔍</button>
                </div>
    </div>

{{-- Barre de navigation --}}
<nav class="lg:h-14 bg-[#3e2610]">
    <div style="margin: 0 auto; padding: 1rem;" class="flex flex-wrap justify-between items-center relative ">
        
        {{-- Bouton de recherche --}}
        <button 
        @click="searchOpen = !searchOpen" 
        style="gap: 0.75rem;" class="flex lg:hidden justify-start items-center"
        type="button">
            <svg style="height: 30px; width: 30px;"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#e8eaed"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
        </button>

        {{-- Barre de recherche pour mobile--}}
        <div 
        style="border: 1px solid #ccc; padding: 0.5rem; height: 2em; width: 15em;"
        class="flex items-center bg-white"
        x-show="searchOpen">
            <input type="text" placeholder="Rechercher..." style="width: 12em;">
            <button>🔍</button>
        </div>

{{-- Barre de menu pour PC/Tablette --}}
<div class="none lg:flex items-center justify-center mx-auto h-14 p-0">
    <div class="flex items-center h-14">
        <div class="ml-10 flex items-baseline space-x-40 text-center">
            <a href="#" class="text-white border border-[#FFEBDE]-1">Encyclopédie</a>
            <a href="#" class=" text-white">Actualités</a>
            <a href="#" class=" text-white">A propos</a>
        </div>
    </div>
</div>

{{-- Bouton de menu --}}
<div>
    <button 
        @click="menuOpen =!menuOpen"
        style="align-items: center; justify-content: center; padding: 0.5rem; width: 2.5rem; height: 2.5rem; font-size: 0.875rem; color: #e8eaed; border-radius: 0.375rem; background-color: transparent; border: none; cursor: pointer; transition: background-color 0.3s, border-color 0.3s; outline: none;" 
        :aria-expanded="open.toString()" 
        aria-controls="navbar-hamburger"
        class="flex lg:hidden relative"
        >
    <svg :class="{ 'rotate-180': open }" style="color: white; height: 30px; width: 30px; transition: transform 0.3s;" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
    </svg>
    </button>
</div>
</nav>

    {{-- Menu déroulant pour mobile --}}
    <div x-data="{encyOpen: false, ruleOpen: false, univerOpen:false,}" class="lg:display:none">
        <ul 
        x-show="menuOpen"
        class="flex-col font-medium absolute w-full z-50" 
        style="text-align: center; background-color: rgb(62,38,16); color:white; display:block;">
            <li style="border: 1px solid rgb(255, 235, 222); padding: 1.5rem;">
                <a style="padding: 0.5rem 0.75rem;" class="text-2xl" href="">Accueil</a></li>
            <li style="border: 1px solid rgb(255, 235, 222); padding: 1.5rem;">
                <a style="padding: 0.5rem 0.75rem;" class="text-2xl" @click="encyOpen = !encyOpen">Encyclopédie ▼</a></li>

                <ul style="background-color: rgb(255, 235,222);">
                    <li x-show="encyOpen" :style="encyOpen? 'padding: 1rem;' : ' ' ">
                        <a style="padding: 0.5rem 0.75rem; color:rgb(62, 38, 16);" class="text-xl font-bold" @click="ruleOpen = !ruleOpen">Règles ▼</a></li>

                            <ul style="background-color: white;" x-show="ruleOpen" :style="encyOpen? '' : 'display:none' ">
                                <li style="padding: 1rem;"><a style="color:black" href="">Histoire</a></li>
                                <li style="padding: 1rem;"><a style="color:black" href="">Carte du monde</a></li>
                                <li style="padding: 1rem;"><a style="color:black" href="">Magie</a></li>
                                <li style="padding: 1rem;"><a style="color:black" href="">Religions</a></li>
                            </ul>

                    <li x-show="encyOpen" :style="encyOpen? 'padding: 1rem;' : ' ' "> 
                        <a style="padding: 0.5rem 0.75rem; color: rgb(62,38,16);" class="text-xl font-bold" @click="univerOpen = !univerOpen">Univers ▼</a></li>

                        <ul style="background-color: white;" x-show="univerOpen" :style="encyOpen? '' : 'display:none' ">
                            <li style="padding: 1rem;"><a style="color:black" href="">Règles</a></li>
                            <li style="padding: 1rem;"><a style="color:black" href="">Création de personnage</a></li>
                            <li style="padding: 1rem;"><a style="color:black" href="">Classes</a></li>
                            <li style="padding: 1rem;"><a style="color:black" href="">Peuples</a></li>
                            <li style="padding: 1rem;"><a style="color:black" href=""> Compétences & Caractèristiques</a></li>
                            <li style="padding: 1rem;"><a style="color:black" href="">Equipements</a></li>
                            <li style="padding: 1rem;"><a style="color:black" href="">Sortilèges</a></li>
                        </ul>
                </ul>

            <li style="border: 1px solid rgb(255, 235, 222); padding: 1.5rem;">
                <a style="padding: 0.5rem 0.75rem" class="text-2xl" href="">Actualités</a></li>
            <li style="border: 1px solid rgb(255, 235, 222); padding: 1.5rem;">
                <a style="padding: 0.5rem 0.75rem;" class="text-2xl" href="">A propos</a></li>
            <li style="border: 1px solid rgb(255, 235, 222); padding: 1.5rem;">
                <a style="padding: 0.5rem 0.75rem;" class="text-2xl" href="">Se connecter/S'inscrire</a></li>
            <li style="border: 1px solid rgb(255, 235, 222); padding: 1.5rem;">
                <a style="padding: 0.5rem 0.75rem;" class="text-2xl" href="">Mon compte</a></li>
            <li style="border: 1px solid rgb(255, 235, 222); padding: 1.5rem;">
                <a style="padding: 0.5rem 0.75rem;" class="text-2xl" href="">Gestion des postes</a></li>
            <li style="border: 1px solid rgb(255, 235, 222); padding: 1.5rem;">
                <a style="padding: 0.5rem 0.75rem;" class="text-2xl" href="">Gestion des comptes</a></li>
        </ul>
    </div>
</header>
        
{{-- Corps --}}
        <main style="flex-direction: column;"
            class="lg:bg-[#ffffff] lg:w-2/3 flex items-center max-lg:w-full lg:mx-auto">

            {{-- Banderole mobile --}}
            <div style="background-color: rgb(135,115,106); text-align: center;" class="lg:hidden w-full">
                <a style="color: white; font-size: xx-large; font-weight: bold;">L'Odyssée d'Adénone</a>
            </div>

            {{-- Carrousel --}}
            <div id="default-carousel" class="relative w-full lg:w-3/5 data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://via.placeholder.com/640x480.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://via.placeholder.com/640x480.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://via.placeholder.com/640x480.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
                    
    {{-- Blocs d'informations --}}
        <div class="lg:flex lg:flex-row lg:justify-between lg:space-x-10">
            {{-- Bloc des info secondaires--}}
            <div style="width: 23em; border: 1px solid rgb(62,38,16); margin-bottom: 1em;"> 
                <h1 style="text-align: center; background-color: rgb(62, 38, 16); color: rgb(255, 235,222); font-size: larger;">
                    Autres actualités</h1>
                <div style="background-color: #a5a5a5; display: flex; flex-direction: column; align-items: center;">
                    <div style="width: 23em; text-align: center; border: 1px solid rgb(62,38,16);">Titre</div>
                    <div style="width: 23em; text-align: center; border: 1px solid rgb(62,38,16);">Titre</div>
                    <div style="width: 23em; text-align: center; border: 1px solid rgb(62,38,16);">Titre</div>
                    <div style="width: 23em; text-align: center; border: 1px solid rgb(62,38,16);">Titre</div>
                    <div style="width: 23em; text-align: center; border: 1px solid rgb(62,38,16);">Titre</div>
                </div>
            </div>
        
            {{-- Bloc des maj --}}
            <div style="width: 23em; border: 1px solid rgb(62,38,16); margin-bottom: 1em;"> 
                <h1 style="text-align: center; background-color: rgb(62, 38, 16); color: rgb(255, 235,222); font-size: larger;">
                    Mises à jours</h1>
                <div style="background-color: #a5a5a5; display: flex; flex-direction: column; align-items: center;">
                    <div style="width: 23em; text-align: center; border: 1px solid rgb(62,38,16);">Titre</div>
                    <div style="width: 23em; text-align: center; border: 1px solid rgb(62,38,16);">Titre</div>
                    <div style="width: 23em; text-align: center; border: 1px solid rgb(62,38,16);">Titre</div>
                    <div style="width: 23em; text-align: center; border: 1px solid rgb(62,38,16);">Titre</div>
                    <div style="width: 23em; text-align: center; border: 1px solid rgb(62,38,16);">Titre</div>
                </div>
            </div>
        </div>
    </main>
        
        {{-- Footer avec réseaux sociaux et liens de conditions générales --}}
        <footer style="max-height: 50px; display: flex; justify-content: space-between; align-items: center; margin: 0 auto; padding: 1rem; background-color: rgb(135, 115, 106)"
        class="bottom-0 absolute lg:w-full lg:relative">
            {{-- Logo --}}
            <div style="display: flex;">
                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" style="margin: 0.8em" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path opacity="1" fill="#FFFFFF" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" style="margin: 0.8em" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path opacity="1" fill="#FFFFFF" d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" style="margin: 0.8em" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path opacity="1" fill="#FFFFFF" d="M391.2 103.5H352.5v109.7h38.6zM285 103H246.4V212.8H285zM120.8 0 24.3 91.4V420.6H140.1V512l96.5-91.4h77.3L487.7 256V0zM449.1 237.8l-77.2 73.1H294.6l-67.6 64v-64H140.1V36.6H449.1z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" style="margin: 0.8em" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path opacity="1" fill="#FFFFFF" d="M524.5 69.8a1.5 1.5 0 0 0 -.8-.7A485.1 485.1 0 0 0 404.1 32a1.8 1.8 0 0 0 -1.9 .9 337.5 337.5 0 0 0 -14.9 30.6 447.8 447.8 0 0 0 -134.4 0 309.5 309.5 0 0 0 -15.1-30.6 1.9 1.9 0 0 0 -1.9-.9A483.7 483.7 0 0 0 116.1 69.1a1.7 1.7 0 0 0 -.8 .7C39.1 183.7 18.2 294.7 28.4 404.4a2 2 0 0 0 .8 1.4A487.7 487.7 0 0 0 176 479.9a1.9 1.9 0 0 0 2.1-.7A348.2 348.2 0 0 0 208.1 430.4a1.9 1.9 0 0 0 -1-2.6 321.2 321.2 0 0 1 -45.9-21.9 1.9 1.9 0 0 1 -.2-3.1c3.1-2.3 6.2-4.7 9.1-7.1a1.8 1.8 0 0 1 1.9-.3c96.2 43.9 200.4 43.9 295.5 0a1.8 1.8 0 0 1 1.9 .2c2.9 2.4 6 4.9 9.1 7.2a1.9 1.9 0 0 1 -.2 3.1 301.4 301.4 0 0 1 -45.9 21.8 1.9 1.9 0 0 0 -1 2.6 391.1 391.1 0 0 0 30 48.8 1.9 1.9 0 0 0 2.1 .7A486 486 0 0 0 610.7 405.7a1.9 1.9 0 0 0 .8-1.4C623.7 277.6 590.9 167.5 524.5 69.8zM222.5 337.6c-29 0-52.8-26.6-52.8-59.2S193.1 219.1 222.5 219.1c29.7 0 53.3 26.8 52.8 59.2C275.3 311 251.9 337.6 222.5 337.6zm195.4 0c-29 0-52.8-26.6-52.8-59.2S388.4 219.1 417.9 219.1c29.7 0 53.3 26.8 52.8 59.2C470.7 311 447.5 337.6 417.9 337.6z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" style="margin: 0.8em" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path opacity="1" fill="#FFFFFF" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
            </div>
            {{-- Liens des conditions générales d'utilisation --}}
            <div style="font-size: 0.5em; text-align: end; color: white;">
                <a src="">Mentions légales</a><br>
                <a src="">Conditions générales d'utilisation</a><br>
                <a src="">Politique et confidentialité</a>
            </div>
        </footer>
    </body>
</html>