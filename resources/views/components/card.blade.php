<div class="card" style="width: 100%;">
    <div class="card-body mb-3">
        <h5 class="card-title">{{ $title }}</h5>
        <h6 class="card-subtitle text-muted">{{ $subtitle }}</p>
    </div>
    <ul class="list-group list-group-flush">
        @if(is_a($items, 'Illuminate\Support\Collection'))
        @foreach ($items as $item)
            <li class="list-group-item">{{ $item }}</li>
        @endforeach
        @else
            {{ $items }}
        @endif
    </ul>
</div>
