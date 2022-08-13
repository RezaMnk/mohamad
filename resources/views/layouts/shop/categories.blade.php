@php
    if (!isset($spaces))
        $spaces = 0;
    $tab = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $spaces);
@endphp
<ul class="swatch-filter-pa_brands">
    @foreach($categories as $category)
        <li @class(['mb-4' => $loop->last])>
            <div class="form-check checkbox my-3 align-items-center">
                {!! $tab !!}
                <input class="form-check-input checkbox-sm" type="checkbox" name="filter[category][]" value="{{ $category->id }}">
                <label class="form-check-label">
                    {{ $category->name }} ({{ $category->products()->count() }})
                </label>
            </div>
{{--            <form class="d-inline">--}}
{{--                <button type="submit" name="filter[category]" value="{{ $category->id }}" class="text-light">{{ $category->name }}</button>--}}
{{--            </form>--}}
{{--            <span class="count">({{ $category->products()->count() }})</span>--}}
        </li>
        @if(count($category->children))
            @include('layouts.shop.categories', ['categories' => $category->children, 'spaces' => $spaces + 1])
        @endif
    @endforeach
</ul>
