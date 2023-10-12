<main>
    <div class="contents">
        @foreach ($arrComics as $card)
            @include('partials.cards')
        @endforeach
    </div>
    <button>LOAD MORE</button>
</main>
