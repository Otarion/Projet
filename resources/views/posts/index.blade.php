<x-default-layout>
        <main class="lg:bg-[#ffffff] lg:w-2/3 items-center justify-around max-lg:w-full lg:mx-auto flex flex-grow-1 h-full flex-col">

            {{-- Banderole mobile --}}
            <div class="lg:hidden w-full bg-[#87736a] text-center">
            </div>

            {{-- Carrousel --}}
            <div id="default-carousel" class="relative lg:pb-16 w-full lg:w-3/5" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    
                    @foreach($posts as $post)

                    <div class="duration-700 ease-in-out" data-carousel-item>
                        <img href="{{$post->thumbnail}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        <a href="">{{ $post->title }}</a>
                    </div>
                    
                    @endforeach

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
                        <span class="sr-only">Précédent</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Suivant</span>
                    </span>
                </button>
            </div>
                    
    {{-- Blocs d'informations --}}
    <div class="lg:flex lg:flex-row lg:justify-between lg:space-x-10 lg:pb-14">
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
</x-layout>