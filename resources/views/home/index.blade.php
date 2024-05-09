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
        @vite('resources/css/app.css')
    </head>

    <body>
{{-- Header --}}
<nav style="background-color: rgb(62, 38, 16)" x-data="{ searchOpen: false }">
    <div style="max-width: 1280px; display: flex; flex-wrap: wrap; justify-content: space-between; margin: 0 auto; padding: 1rem; position: relative;">
        
        {{-- Bouton de recherche --}}
        <button @click="searchOpen = !searchOpen" style="display: flex; align-items: center; gap: 0.75rem; flex-direction: rtl-reverse;" type="button">
            <svg style="height: 30px; width: 30px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#e8eaed"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
        </button>

        {{-- Barre de recherche --}}
        <div x-show="searchOpen" @click.away="searchOpen = false" style="position: absolute; top: 100%; right: 0; background-color: white; border: 1px solid #ccc; padding: 0.5rem;">
            {{-- Insérez votre code HTML pour la barre de recherche ici --}}
            <input type="text" placeholder="Rechercher..." style="width: 200px; padding: 0.5rem;">
            <button style="padding: 0.5rem;">Rechercher</button>
        </div>
    
        {{-- Bouton de menu --}}
        <button @click="open = !open" style="display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem; width: 2.5rem; height: 2.5rem; font-size: 0.875rem; color: #e8eaed; border-radius: 0.375rem; background-color: transparent; border: none; cursor: pointer; transition: background-color 0.3s, border-color 0.3s; outline: none;" :aria-expanded="open.toString()" aria-controls="navbar-hamburger">
            <svg :class="{ 'rotate-180': open }" style="color: white; height: 30px; width: 30px; transition: transform 0.3s;" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
    </div>

        {{-- Menu déroulant pour mobile --}}
        <div :class="{ 'hidden': !open, 'block': open }" :id="'navbar-hamburger-' + open" class="w-full">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <li>
                            <a style="display: block; padding: 0.5rem 0.75rem; color: white; background-color: rgb(165,165,165); text-decoration: none;" href="#" aria-current="page">
                            Accueil</a>
                        </li>
                        <li>
                            <a style="display: block; padding: 0.5rem 0.75rem; color: white; background-color: rgb(165,165,165); text-decoration: none;">
                                Encyclopédie</a>
                        </li>
                        <li>
                            <a style="display: block; padding: 0.5rem 0.75rem; color: white; background-color: rgb(165,165,165); text-decoration: none;">
                                Actualités</a>
                        </li>
                        <li>
                            <a style="display: block; padding: 0.5rem 0.75rem; color: white; background-color: rgb(165,165,165); text-decoration: none;">
                                A propos</a>
                        </li>
                        <li>
                            <a style="display: block; padding: 0.5rem 0.75rem; color: white; background-color: rgb(165,165,165); text-decoration: none;">
                                Se connecter/S'inscrire</a>
                        </li>
                        <li>
                            <a style="display: block; padding: 0.5rem 0.75rem; color: white; background-color: rgb(165,165,165); text-decoration: none;">
                                Mon compte</a>
                        </li>
                        <li>
                            <a style="display: block; padding: 0.5rem 0.75rem; color: white; background-color: rgb(165,165,165); text-decoration: none;">
                                Gestion des postes</a>
                        </li>
                        <li>
                            <a style="display: block; padding: 0.5rem 0.75rem; color: white; background-color: rgb(165,165,165); text-decoration: none;">
                                Gestion des comptes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        {{-- Colonne centrale --}}
        <div>

        </div>
        {{-- Footer avec réseaux sociaux et liens de conditions générales --}}
        <footer>

        </footer>

    </body>
</html>