<x-default-layout title="Connexion/Inscription" :action="route('register')" submitMessage="Je me connecte">

    <main class="lg:bg-[#ffffff] lg:w-2/3 items-center justify-around max-lg:w-full lg:mx-auto flex flex-grow-1 h-full flex-col">

        {{-- Banderole mobile --}}
        <div class="lg:hidden w-full bg-[#87736a] text-center text-[#ffebde] h-10 text-center justify-center text-3xl">Connexion/Inscription</div>

    <div class="lg:flex lg:flex-row pt-10 pb-10 pr-8 pl-8 justify-items-center text-center">

        {{-- Formulaire de connexion --}}
    <div class="flex flex-row pt-10 pb-10 w-full justify-items-center text-center mr-10">
        <form class="border border-[#3e2610] p-4 bg-[#a5a5a595] justify-around space-y-5 flex flex-col items-center w-full" 
        action="{{ route('register') }}" novalidate>
        @csrf
            <a class="underline text-[#3e2610] text-2xl">Connexion</a>
            <input type="email" id="email" name="email" placeholder="Email" class="border border-[#3e2610] w-2/3 text-center h-10">
            <input type="password" id="password" name="password" placeholder="Mot de passe" class="border border-[#3e2610] w-2/3 text-center h-10">
            <a class="underline">Mot de passe oublié ?</a>
            <div class="flex">
                <input type="checkbox" id="remember" name="remember">
                <a class="pl-2">Se souvenir de moi</a>
            </div>
            <button type="submit" class="bg-[#3e2610] text-[#ffebde] p-3">Je me connecte</button>
        </form>
    </div>

            {{-- Formulaire d'inscription --}}
            <div class="flex flex-row pt-10 pb-10 w-full justify-items-center text-center">
                <form class="border border-[#3e2610] p-4 bg-[#a5a5a595] justify-around space-y-5 flex flex-col items-center w-full" action="" novalidate >
                @csrf
                <a class="underline text-[#3e2610] text-2xl">Inscription</a>
                <input type="text" id="name" name="name" placeholder="Nom d'utilisateur *" class="border border-[#3e2610] w-2/3 text-center h-10">
                <input type="email" id="email" name="email"placeholder="E-mail *"  class="border border-[#3e2610] w-2/3 text-center h-10">
                <input type="password" id="password" name="password" name="password"placeholder="Mot de passe *"  class="border border-[#3e2610] w-2/3 text-center h-10">
                <p class="bg-white border border-[#3e2610] text-cente p-2">Votre mot de passe doit contenir:<br>- Min. 8 caractères<br>-Une lettre majuscrule<br>-Un caractèren spécial (!#&*+,-.:;<>=?@[\/_-{|}])<br>-Un chiffre</p>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmation du mot de passe *"  class="border border-[#3e2610] w-2/3 text-center h-10">
                <div class="flex">
                    <input type="checkbox" id="newsletters" name="newsletters" class="flex items-start self-start">
                    <a class="pl-2 lg: text-base text-sm">En cochant cette case, vous acceptez de recevoir des newlestters par e-mail.</a>
                </div>
                <div class="flex">
                    <input type="checkbox" id="termsOfUse" name="termsOfUse">
                    <a class="pl-2 lg: text-base text-sm">J'accepte les conditions d'utilisations. *</a>
                </div>
                <div class="flex flex-row justify-between space-x-4 m-2">
                    <input type="checkbox">
                    <p class="lg: text-base text-sm"> J'accepte que mes données personnelles soient collectées, utilisées et conservées conformément à la politique de confidentialité.</p>
                </div>
                <button type="submit" class="bg-[#3e2610] text-[#ffebde] p-3">Je m'inscris</button>
                <a class="text-sm">* : champs obligatoires</a>
            </form>
        </div>
</div>

    </main>
</x-layout>