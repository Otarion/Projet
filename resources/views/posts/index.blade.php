<x-default-layout title="Accueil">
        <main class="lg:bg-[#ffffff] lg:w-2/3 items-center justify-around max-lg:w-full lg:mx-auto flex flex-grow-1 h-full flex-col">

            {{-- Banderole mobile --}}
            <div class="lg:hidden w-full bg-[#87736a] text-center">
            </div>

{{-- Carousel --}}

<div class="max-lg:flex max-lg:justify-center">
    {{-- Blocs d'informations --}}
    <div class="lg:flex lg:flex-row lg:justify-between lg:space-x-10 lg:pb-2 lg:bt-2">
        {{-- Bloc des info secondaires--}}
        <div style="margin-bottom: 1em;" class="border border-1px border-[#3e2610]" class="w-96"> 
            <h1 style="text-align: center; background-color: rgb(62, 38, 16); color: rgb(255, 235,222); font-size: larger;">
                Autres actualités</h1>
            <div style="background-color: #a5a5a5; display: flex; flex-direction: column; align-items: center;" class="max-h-48 overflow-y-scroll overflow-x-hidden lg:max-h-80">
                @foreach($posts as $post)
                    @if($post->category && $post->category->name == 'Important')

                <a style="text-align: center; border: 1px solid rgb(62,38,16);" class="p-1 max-h-14 hover:underline w-96 md:w-full" href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a>
                    
                    @endif
                @endforeach
            </div>
        </div>
    
        {{-- Bloc des maj --}}
        <div style="width: 23em; border: 1px solid rgb(62,38,16);" class=""> 
            <h1 style="text-align: center; background-color: rgb(62, 38, 16); color: rgb(255, 235,222); font-size: larger;">
                Mises à jours</h1>
            <div style="background-color: #a5a5a5; display: flex; flex-direction: column; align-items: center;" class="max-h-48 overflow-y-scroll overflow-x-hidden lg:max-h-80">
                <div style="width: 23em; text-align: center; border: 1px solid rgb(62,38,16);"  class="p-1 max-h-14 hover:underline">Titre</div>
                <div style="width: 23em; text-align: center; border: 1px solid rgb(62,38,16);">Titre</div>
                <div style="width: 23em; text-align: center; border: 1px solid rgb(62,38,16);">Titre</div>
                <div style="width: 23em; text-align: center; border: 1px solid rgb(62,38,16);">Titre</div>
                <div style="width: 23em; text-align: center; border: 1px solid rgb(62,38,16);">Titre</div>
            </div>
        </div>
    </div>
</div>
</main>
</x-layout>