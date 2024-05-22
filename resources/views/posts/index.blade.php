<x-default-layout title="Accueil">
        <main class="lg:bg-[#ffffff] lg:w-2/3 items-center justify-around max-lg:w-full lg:mx-auto flex flex-grow-1 h-full flex-col p-5">

            {{-- Banderole mobile --}}
            <div class="lg:hidden w-full bg-[#87736a] text-center">
            </div>

    {{-- Bloc informations importantes --}}
            <div class="h-96"> 
                <div style="display: flex; flex-direction: row; align-items: center;" class="max-h-48 overflow-x-scroll overflow-y-hidden lg:max-h-80">
                    @foreach($posts as $post)
                        @if($post->category && $post->category->name == 'Important')
                    
                <div class="mr-3 ml-3 border border-1px border-[#a5a5a5] flex flex-col h-72">
                    <img alt="Image"  src="{{$post->thumbnail}}" class="h-60 align-center items-start w-full">
                    <a style="text-align: center" class="p-1 max-h-14 hover:underline w-96 md:w-full" href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a>
                </div>

                        @endif
                    @endforeach
                </div>
            </div>

<div class="max-lg:flex max-lg:justify-center">
    {{-- Blocs d'informations --}}
    <div class="lg:flex lg:flex-row lg:justify-between lg:space-x-10 lg:pb-2">

        {{-- Bloc des info secondaires--}}
        <div class="border border-1px border-[#3e2610]"> 
            <h1 style="text-align: center; background-color: rgb(62, 38, 16); color: rgb(255, 235,222); font-size: larger;">
                Autres actualités</h1>
            <div style="background-color: #a5a5a5; display: flex; flex-direction: column; align-items: center;" class="max-h-48 overflow-y-scroll overflow-x-hidden lg:max-h-80">
                @foreach($posts as $post)
                    @if($post->category && $post->category->name == 'Secondaire')

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