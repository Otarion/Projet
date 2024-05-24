<x-default-layout title="A propos">
    <main class="lg:bg-[#ffffff] lg:w-2/3 items-center justify-around max-lg:w-full lg:mx-auto flex flex-grow-1 h-fit flex-col">

    {{-- Banderole mobile --}}
    <div class="lg:hidden w-full bg-[#87736a] text-center text-[#ffebde] h-10 text-center justify-center text-3xl">A propos</div>

<div class="flex flex-row m-2 lg:w-4/5">
    <div class="flex flex-col">

{{-- Question avec réponse --}}
@foreach($faqs as $faq)
<div class="lg:flex flex-row bg-[#a5a5a587] border border-1 border-[#87736a] lg:w-5/6 w-11/12 mx-auto lg:h-36 p-3 mt-3">
    <div class="flex flex-col">

        <a class="lg:text-4xl text-xl font-bold text-[#3e2610] text-justify" alt="question" href="">{{ $faq->question }}</a>
        <p class="mb-3 text-justify" alt="réponse" href="">{{ $faq->answer }}</p>

    </div>
</div>

@endforeach

<hr class="mt-10 mb-5">

{{-- Formulaire de contact --}}

<h1 class="font-bold text-7xl flex justify-center">Contact</h1>
<div class="flex justify-center">
<form class="border border-1px border-[#3e2610] p-3 flex flex-col m-5 w-4/5 bg-[#a5a5a5af]">
    @csrf
    <label class="underline text-[#3e2610]">Pseudo:</label>
    <input type="text">
    <label class="underline text-[#3e2610]">E-mail*:</label>
    <input type="email">
    <label class="underline text-[#3e2610]">Objet:</label>
    <input type="text">
    <label class="underline text-[#3e2610]">Message*:</label>
    <input type="text" class="h-36">
        <div class="flex flex-row justify-between space-x-4 m-2">
    <input type="checkbox">
    <p class="lg: text-base text-sm"> J'accepte que mes données personnelles soient collectées, utilisées et conservées conformément à la politique de confidentialité.</p>
        </div>
    <button type="submit" class="p-3 m-3 bg-[#3e2610] text-[#ffebde] lg:w-1/5 w-1/3  flex self-center justify-center" href="">Envoyer</button>
</form>
</div>

    </div>
</div>

    </main>
</x-default-layout>