<ul class="list-unstyled">
    @foreach($items as $item)
        <li>
            <a href="{{ $item->link }}">
                {{ $item->title }}
            </a>

            @if($item->hasChildren())
                @include('offcanvas.nav.items', [
                    'items' => $item->children
                ])
            @endif
        </li>
    @endforeach
</ul>
