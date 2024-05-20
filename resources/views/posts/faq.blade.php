<x-default-layout title="A propos">

    <div>
@foreach($faqs as $faq)
    <div>
        <a href="">{{ $faq->question }}</a>
        <p href="">{{ $faq->answer }}</p>
    </div>
@endforeach
</div>

</x-default-layout>