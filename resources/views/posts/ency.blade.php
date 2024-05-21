<x-default-layout :title="'Encyclopédie - '.$encyclopedia->type">

            {{-- Banderole mobile --}}
            <div class="lg:hidden w-full bg-[#87736a] text-center text-[#ffebde] h-10 text-center justify-center text-3xl"></div>

    {{-- Posts --}}
    <div class="max-lg:w-full h-full">

        @foreach($encyclopedias as $encyclopedia)
        
        <div class="w-full lg:m-3 mt-3">
            <div class="lg:flex flex-row bg-[#a5a5a587] border border-1 border-[#87736a] lg:w-5/6 w-11/12 mx-auto lg:h-72">
                <div class="flex flex-row m-2 lg:w-2/3">
        
                    {{-- Contenu de la page --}}
                    <div class="flex flex-col">
                        <a class="lg:text-4xl text-xl font-bold text-[#3e2610] text-justify hover:underline" href="{{ route('posts.show', ['post' => $post]) }}">{{ $encyclpedia->title }}</a>
                    </div>
                </div>

            </div>
        </div>
        
        @endforeach
        
        {{-- Pagination --}}
        <div class="mt-3 mb-3 flex"> {{ $posts->links() }}</div>
        
        </div>
        
        </main>
</x-default-layout>