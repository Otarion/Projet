<x-layout>

    <main class="lg:bg-[#ffffff] lg:w-2/3 items-center justify-around max-lg:w-full lg:mx-auto flex flex-grow-1 h-full flex-col">

        {{-- Banderole mobile --}}
        <div class="lg:hidden w-full bg-[#87736a] text-center">CONNEXION / INSCRIPTION</div>

    <div  class="flex flex-row pt-10 pb-10 w-full pr-8 pl-8 justify-items-center">
        {{-- Formulaire d'inscription --}}
        <form class="border border-[#3e2610] p-4 bg-[#a5a5a595] justify-between space-y-1 flex flex-col items-center">
            <a class="underline text-[#3e2610] text-2xl">Inscription</a>
            <input type="text" id="name" name="name" required placeholder="Nom d'utilisateur *">
            <input type="text" id="email" name="email" required placeholder="E-mail *">
            <input type="text" id="password" name="password" required placeholder="Mot de passe *">
            <p class="bg-white border border-[#3e2610] text-center">Votre mot de passe doit contenir:<br>- Min. 8 caractères<br>-Une lettre majuscrule<br>-Un caractèren spécial (!#&*+,-.:;<>=?@[\/_-{|}])<br>-Un chiffre</p>
            <input type="text" id="pssword_confirmation" name="password_confirmation" required placeholder="Confirmation du mot de passe *">
            <div class="flex">
                <input type="checkbox" id="newsletters" name="newsletters">
                <a class="pl-2">En cochant cette case, vous acceptez de recevoir des newlestters par e-mail.</a>
            </div>
            <div class="flex">
                <input type="checkbox" id="termsOfUse" name="termsOfUse">
                <a class="pl-2">J'accepte les conditions d'utilisations. *</a>
            </div>
            <button type="submit" class="bg-[#3e2610] text-[#ffebde] p-3">Je m'inscris</button>
            <a>* : champs obligatoires</a>
        </form>

        <a>OU</a>
        {{-- Formulaire de connexion --}}
        <form>
            <a>Connexion</a>
            <input type="text" id="email" name="email" required placeholder="Email">
            <input type="text" id="password" name="password" required placeholder="Mot de passe">
            <a>Mot de passe oublié ?</a>
            <div class="flex">
                <input type="checkbox" id="stay_connect" name="stay-connect">
                <a>Se souvenir de moi</a>
            </div>
            <button type="submit">Je me connecte</button>
        </form>
    </div>

    </main>
</x-layout>