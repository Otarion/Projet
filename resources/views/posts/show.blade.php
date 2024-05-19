<x-default-layout :title="$post->title">

    {{-- Corps --}}
    <main class="lg:bg-[#ffffff] lg:w-2/3 items-center justify-around max-lg:w-full lg:mx-auto flex flex-grow-1 h-fit flex-col">

    {{-- Post --}}
            <div class="w-full h-full">

                <div class="w-full lg:m-3 mt-3">
        
                    <div class="lg:flex flex-row lg:w-5/6 w-11/12 mx-auto">

                        {{-- Boutons de modification et de suppresion de l'article --}}
                        <div class="flex flex-row items-center max-lg:justify-end lg:justify-start pl-2">
                            <button class="mb-2 pl-3" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-8 w-8" fill="[#3e2610]"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                            </button>
                            <button href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-8 w-8" fill="[#3e2610]"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zm175 79c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/></svg>
                            </button>
                        </div>

                        <div class="flex flex-row m-2 lg:w-2/3">

                    {{-- Contenu des  posts--}}
                        <div class="flex flex-col">
                            <a class="lg:text-4xl text-xl font-bold text-[#3e2610] text-justify">{{ $post->title }}</a>
                            <p class="mb-3 text-justify">{!! nl2br(e($post->content)) !!}</p>

                            @if ($post->category)
                            <a href="{{ route('posts.byCategory', ['category'=>$post->category]) }}" class="font-bold">{{ $post->category->name }}</a>
                            @endif

                            <time class="text-[#a5a5a5]" datetime="{{ $post->created_at }}">@datetime($post->created_at)</time>
                        </div>

                    </div>
                    <div class="m-2 lg:w-1/3 flex flex-row">

                        <img alt="Image" class="justify-end" src="{{$post->thumbnail}}">

                    </div>
                </div>
            </div>
        </div>

        {{-- Espace commentaires --}}
        <div class="w-4/6 flex items-center justify-center mt-5 mb-5">
                {{-- Commenter --}}
            <div class="flex flex-col border border-[#87736a] border-2 rounded-md w-full h-36 items-center">
                <textarea href="" class="border border-black mt-3 w-11/12"></textarea>
                <input type="button" class="rounded-md text-[#ffedbe] bg-[#3e2610]" href="">Commenter</input>
            </div>

            {{-- Précédents commentaires --}}
            <div class="border border-[#87736a] border-2">
                {{-- Commentaire --}}
                <div class="border border-[#a5a5a5]">

                    {{-- User --}}
                    <div>
                        <img href="">
                        <a href=""></a>
                    </div>
                    
                    {{-- Content --}}
                    <p href=""></p>

                    {{-- Datetime --}}
                    <datetime datetime=""></datetime>

                </div>
            </div>
        </div>

    </main>
</x-layout>