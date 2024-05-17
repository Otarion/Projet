<x-layout>
    <main class="lg:bg-[#ffffff] lg:w-2/3 items-center justify-around max-lg:w-full lg:mx-auto flex flex-grow-1 h-full flex-col">

        {{-- Banderole mobile --}}
        <div class="lg:hidden w-full bg-[#87736a] text-center">Actualités</div>

    {{-- Bouton d'ajout d'articles--}}
    <button class="flex lg:absolute lg:right-80 lg:top-56">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="[#87736a]" class="h-10 w-10"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
    </button>

    {{-- Posts --}}
<div class="w-full h-full">

@foreach($posts as $post)

<div class="w-full lg:m-3 mt-3">
    <div class="lg:flex flex-row bg-[#a5a5a5c5] border border-1 border-[#87736a] lg:w-5/6 w-11/12 mx-auto lg:h-72">
        <div class="flex flex-row m-2 lg:w-2/3">

            {{-- Contenu du post --}}
            <div class="flex flex-col">
                <a class="lg:text-4xl text-xl font-bold text-[#3e2610] text-justify" href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a>
                <p class="mb-3 text-justify">{{ $post->excerpt }}</p>

                @if ($post->category)
                <a href="" class="font-bold">{{ $post->category->name }}</a>
                @endif

                <time class="text-[#00000090]" datetime="{{ $post->created_at }}">@datetime($post->created_at)</time>
            </div>
        </div>

        {{-- Image du post --}}
        <div class="m-2 lg:w-1/3 flex flex-row">
            <img alt="Image" class="justify-end" src="{{$post->thumbnail}}">
        </div>
    </div>
</div>

@endforeach

</div>

{{-- Pagination --}}
<div class="mt-3 mb-3"> {{ $posts->links() }}</div>

</main>
</x-layout>