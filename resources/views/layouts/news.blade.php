<!DOCTYPE html>
<html lang="fr" class="h-full">
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

    <body class="font-judson lg:bg-[#a5a5a5] bg-white h-full">

{{-- Header --}}
    <header x-data="{searchOpen: false, menuOpen:false,}" x-cloak>

        {{-- Banderole PC/tablette --}}
    <div class="max-lg:hidden h-28 text-center items-center flex justify-center bg-[#87736a]">
        <a>
            <img src="image/logo/logonoir.png" class="content-start ml-4 mr-40 h-20" alt="logo-oa">
        </a>
        <span class="text-white text-7xl flex-grow mx-auto w-2/3 font-bold">L'Odyssée d'Adénone</span>
                
            {{-- Barre de recherche pour PC/tablette--}}
                <div class="mr-1 top-9 relative flex items-center bg-white border border-white-1 p-2 h-8 w-60">
                    <input type="text" placeholder="Rechercher..." class="w-48">
                    <button>🔍</button>
                </div>
    </div>

{{-- Barre de navigation --}}
<nav class="bg-[#3e2610]">
    <div style="margin: 0 auto; padding: 0.7rem;" class="flex flex-wrap justify-between items-center relative lg:border lg:border-[#ffebde]-1">
        
        {{-- Bouton de recherche --}}
        <button 
        @click="searchOpen = !searchOpen" 
        class="flex lg:hidden justify-start items-center gap-3" type="button">
            <svg style="height: 30px; width: 30px;"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#e8eaed"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
        </button>

        {{-- Barre de recherche pour mobile--}}
        <div class="flex items-center bg-white border border-[#ccc]-1 p-2 h-8 w-60" x-show="searchOpen">
            <input type="text" placeholder="Rechercher..." style="width: 12em;">
            <button>🔍</button>
        </div>

{{-- Barre de menu pour PC/Tablette --}}
<div class="max-lg:hidden  items-center justify-center h-14 p-0">
    <div class="flex items-center h-14">
            <div class="items-center m-32">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-12 w-12" fill="#ffebde" href=""><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg></div>
                <div class="space-x-94.5 flex items-baseline text-center">
                    <div class="border h-20 border-[#ffebde]-1 p-5 text-2xl w-42">
                        <a href="#" class="text-white">Encyclopédie</a></div>
                    <div class="border h-20 border-[#ffebde]-1 p-5 text-2xl w-42">
                        <a href="#" class="text-white">Actualités</a></div>
                    <div class="border h-20 border-[#ffebde]-1 p-5 text-2xl w-42">
                        <a href="#" class="text-white">A propos</a></div>
                </div>
            <div class="m-20 flex flex-row justify-around space-x-20">
                <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-10 w-10" fill="#ffebde" href=""><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z"/></svg></div>
                <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-10 w-10" fill="#ffebde" href=""><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V256c0 17.7 14.3 32 32 32s32-14.3 32-32V32zM143.5 120.6c13.6-11.3 15.4-31.5 4.1-45.1s-31.5-15.4-45.1-4.1C49.7 115.4 16 181.8 16 256c0 132.5 107.5 240 240 240s240-107.5 240-240c0-74.2-33.8-140.6-86.6-184.6c-13.6-11.3-33.8-9.4-45.1 4.1s-9.4 33.8 4.1 45.1c38.9 32.3 63.5 81 63.5 135.4c0 97.2-78.8 176-176 176s-176-78.8-176-176c0-54.4 24.7-103.1 63.5-135.4z"/></svg></div>
            </div>
    </div>
</div>

{{-- Bouton de menu --}}
<div>
    <button 
        @click="menuOpen =!menuOpen"
        style="font-size: 0.875rem; color: #e8eaed; border-radius: 0.375rem; background-color: transparent; border: none; cursor: pointer; transition: background-color 0.3s, border-color 0.3s; outline: none;" 
        :aria-expanded="open.toString()" 
        aria-controls="navbar-hamburger"
        class="flex lg:hidden relative items-center justify-center p-2 w-10 h-10"
        >
    <svg :class="{ 'rotate-180': open }" fill="#ffffff" style="height: 30px; width: 30px; transition: transform 0.3s;" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
    </svg>
    </button>
</div>
</nav>

    {{-- Menu déroulant pour mobile --}}
    <div x-data="{encyOpen: false, ruleOpen: false, univerOpen:false,}" class="lg:display:none">
        <ul x-show="menuOpen"
        class="flex-col font-medium absolute w-full z-50 text-center bg-[#3e2610] text-white block" >
            <li class="border border-[#ffebde]-1 p-6">
                <a style="padding: 0.5rem 0.75rem;" class="text-2xl" href="">Accueil</a></li>
            <li class="border border-[#ffebde]-1 p-6">
                <a style="padding: 0.5rem 0.75rem;" class="text-2xl" @click="encyOpen = !encyOpen">Encyclopédie ▼</a></li>

                <ul class="bg-[#ffebde]">
                    <li x-show="encyOpen" :style="encyOpen? 'padding: 1rem;' : ' ' ">
                        <a style="padding: 0.5rem 0.75rem;" class="text-xl font-bold text-[#3e2610]" @click="ruleOpen = !ruleOpen">Règles ▼</a></li>

                            <ul class="bg-white" x-show="ruleOpen" :style="encyOpen? '' : 'display:none' ">
                                <li class="p-4"><a class="text-black" href="">Histoire</a></li>
                                <li class="p-4"><a class="text-black" href="">Carte du monde</a></li>
                                <li class="p-4"><a class="text-black" href="">Magie</a></li>
                                <li class="p-4"><a class="text-black" href="">Religions</a></li>
                            </ul>

                    <li x-show="encyOpen" :style="encyOpen? 'padding: 1rem;' : ' ' "> 
                        <a style="padding: 0.5rem 0.75rem;" class="text-xl font-bold text-[#3e2610]" @click="univerOpen = !univerOpen">Univers ▼</a></li>

                        <ul class="bg-white" x-show="univerOpen" :style="encyOpen? '' : 'display:none' ">
                            <li class="p-4"><a class="text-black" href="">Règles</a></li>
                            <li class="p-4"><a class="text-black" href="">Création de personnage</a></li>
                            <li class="p-4"><a class="text-black" href="">Classes</a></li>
                            <li class="p-4"><a class="text-black" href="">Peuples</a></li>
                            <li class="p-4"><a class="text-black" href=""> Compétences & Caractèristiques</a></li>
                            <li class="p-4"><a class="text-black" href="">Equipements</a></li>
                            <li class="p-4"><a class="text-black" href="">Sortilèges</a></li>
                        </ul>
                </ul>

            <li class="border border-[#ffebde]-1 p-6">
                <a style="padding: 0.5rem 0.75rem" class="text-2xl" href="">Actualités</a></li>
            <li class="border border-[#ffebde]-1 p-6">
                <a style="padding: 0.5rem 0.75rem;" class="text-2xl" href="">A propos</a></li>
            <li class="border border-[#ffebde]-1 p-6">
                <a style="padding: 0.5rem 0.75rem;" class="text-2xl" href="">Se connecter/S'inscrire</a></li>
            <li class="border border-[#ffebde]-1 p-6">
                <a style="padding: 0.5rem 0.75rem;" class="text-2xl" href="">Mon compte</a></li>
            <li class="border border-[#ffebde]-1 p-6">
                <a style="padding: 0.5rem 0.75rem;" class="text-2xl" href="">Gestion des postes</a></li>
            <li class="border border-[#ffebde]-1 p-6">
                <a style="padding: 0.5rem 0.75rem;" class="text-2xl" href="">Gestion des comptes</a></li>
        </ul>
    </div>
        {{-- Banderole titre --}}
        <div class="w-full bg-[#87736a] text-center h-16 items-center justify-center flex lg:w-2/3 lg:mx-auto">
            <a class="text-white text-4xl">Actualités</a>
        </div>
</header>

{{-- Corps --}}
<main class="lg:bg-[#ffffff] lg:w-2/3 items-center justify-around max-lg:w-full lg:mx-auto flex flex-grow-1 h-fit flex-col">

    {{-- Bouton d'ajout --}}
    <button class="flex lg:absolute lg:right-80 lg:top-64 lg:mt-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="[#87736a]" class="h-10 w-10"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
    </button>

    {{-- Articles --}}
<div class="w-full h-full">

@foreach($posts as $post)
<div class="w-full lg:m-3 mt-3">
        
    <div class="lg:flex flex-row bg-[#a5a5a5c5] border border-1 border-[#87736a] lg:w-5/6 w-11/12 mx-auto lg:h-72">
        <div class="flex flex-row m-2 lg:w-2/3">

            <div class="flex flex-col">
            <a class="lg:text-4xl text-xl font-bold text-[#3e2610] text-justify">{{ $post->title }}</a>
            <p class="mb-3 text-justify">{{ $post->excerpt }}</p>
            <a>Catégorie</a>
            <a>{{ $post->created_at }}</a>
            </div>

                <div class="lg:hidden flex flex-col w-1/4 items-center pl-2 max-lg:hidden">
                    <button class="mb-2 pl-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-8 w-8" fill="[#3e2610]"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                    </button>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-8 w-8" fill="[#3e2610]"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zm175 79c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/></svg>
                    </button>
                </div>



        </div>
        <div class="m-2 lg:w-1/3 flex flex-row">

            <img alt="Image" class="justify-end" src="{{$post->thumbnail}}">

            <div class="flex flex-col w-1/4 items-center pl-2 ">
                <button class="mb-2 pl-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-8 w-8" fill="[#3e2610]"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                </button>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-8 w-8" fill="[#3e2610]"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zm175 79c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/></svg>
                </button>
            </div>

        </div>
    </div>
    
</div>
@endforeach

</div>

<div class="mt-3 mb-3">
{{ $posts->links() }}
</div>

</main>

{{-- Footer avec réseaux sociaux et liens de conditions générales --}}
<footer style="max-height: 50px; display: flex; justify-content: space-between; align-items: center; margin: 0 auto; padding: 1rem; background-color: rgb(135, 115, 106)" class="bottom-0  w-full">
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
        <a href="#">Mentions légales</a><br>
        <a href="#">Conditions générales d'utilisation</a><br>
        <a href="#">Politique et confidentialité</a>
    </div>
</footer>
    </body>
</html>