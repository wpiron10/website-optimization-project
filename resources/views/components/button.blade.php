<button class="button button-{{$color}}">
    <span>{{$text}}</span>
    @if ($arrow === "true")
    <div class="button-image"><img src="{{ asset('assets/icons/right-arrow.svg') }}" alt="" loading="lazy" width="10"></div>
    @endif
</button>