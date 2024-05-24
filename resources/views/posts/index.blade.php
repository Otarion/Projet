<x-default-layout title="Accueil">
        <main class="lg:bg-[#ffffff] lg:w-2/3 items-center justify-around max-lg:w-full lg:mx-auto flex flex-grow-1 h-full flex-col p-5">

            {{-- Banderole mobile --}}
            <div class="lg:hidden w-full bg-[#87736a] text-center">
            </div>

    {{-- Bloc du slider pour les informations importantes --}}
    <div class="lg:h-96 lg:w-[48.5rem] w-full h-80"> 
        <div class="flex flex-row items-center max-h-72 overflow-x-auto overflow-y-hidden lg:max-h-80">
            @foreach($posts as $post)
                @if($post->category && $post->category->name == 'Important')
                    <div class="mr-3 ml-3 border border-1 border-[#a5a5a5] flex-shrink-0 flex flex-col h-72 w-72">
                        <img alt="Image" src="{{$post->thumbnail}}" class="h-60 w-full object-cover">
                        <a class="text-center p-1 max-h-14 hover:underline w-full text-xs lg:text-base" 
                        href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a>
                        <time class="text-[#7b7b7b96] text-xs ml-2" datetime="{{ $post->created_at }}">{{ $post->created_at }}</time>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    

            <div class="max-lg:flex max-lg:justify-center">
                {{-- Blocs d'informations --}}
                <div class="lg:flex lg:flex-row lg:justify-between lg:space-x-10 lg:pb-2">
            
                    {{-- Bloc des info secondaires--}}
                    <div class="border border-1px border-[#3e2610] w-full lg:w-[23em]"> 
                        <h1 class="text-center bg-[#3e2610] text-[#ffebde] text-lg">
                            Autres actualités
                        </h1>
                        <div class="bg-[#a5a5a5] flex flex-col items-center max-h-48 overflow-y-auto overflow-x-hidden lg:max-h-80">
                            @foreach($posts as $post)
                                @if($post->category && $post->category->name == 'Secondaire')
                                    <a class="text-center border border-[#3e2610] p-1 max-h-14 hover:underline w-96 md:w-full" href="{{ route('posts.show', ['post' => $post]) }}">
                                        {{ $post->title }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
            
                    {{-- Bloc des maj --}}
                    <div class="border border-1px border-[#3e2610] w-full lg:w-[23em] lg:mt-0 mt-10">
                        <h1 class="text-center bg-[#3e2610] text-[#ffebde] text-lg">
                            Mises à jours
                        </h1>
                        <div class="bg-[#a5a5a5] flex flex-col items-center max-h-48 overflow-y-auto overflow-x-hidden lg:max-h-80">
                            <div class="w-full text-center border border-[#3e2610] p-1 max-h-14 hover:underline">Titre</div>
                            <div class="w-full text-center border border-[#3e2610]">Titre</div>
                            <div class="w-full text-center border border-[#3e2610]">Titre</div>
                            <div class="w-full text-center border border-[#3e2610]">Titre</div>
                            <div class="w-full text-center border border-[#3e2610]">Titre</div>
                            <div class="w-full text-center border border-[#3e2610]">Titre</div>
                            <div class="w-full text-center border border-[#3e2610]">Titre</div>
                            <div class="w-full text-center border border-[#3e2610]">Titre</div>
                            <div class="w-full text-center border border-[#3e2610]">Titre</div>
                            <div class="w-full text-center border border-[#3e2610]">Titre</div>
                            <div class="w-full text-center border border-[#3e2610]">Titre</div>
                            <div class="w-full text-center border border-[#3e2610]">Titre</div>
                            <div class="w-full text-center border border-[#3e2610]">Titre</div>
                        </div>
                    </div>
                </div>
            </div>
            </main>
            </x-layout>
            