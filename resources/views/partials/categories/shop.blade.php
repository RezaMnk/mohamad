@php
    if (!isset($spaces))
        $spaces = 0;
    $tab = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $spaces);
@endphp
<ul class="swatch-filter-pa_brands">
    @foreach($categories as $category)
        <li @class(['mb-4' => $loop->last])>
            {!! $tab !!}
            @if(request()->category == $category->id)
                <i class="fas fa-caret-left text-primary"></i>
            @endif
            <a href="{{ route('home.shop', ['category' => $category->id, ...request()->except('category')]) }}" class="{{ request()->category == $category->id ? 'fw-bolder' : 'text-light' }}">
                {{ $category->name }} ({{ $category->products()->count() }})
            </a>
        </li>
        @if(count($category->children))
            @include('partials.categories.shop', ['categories' => $category->children, 'spaces' => $spaces + 1])
        @endif
    @endforeach
</ul>
