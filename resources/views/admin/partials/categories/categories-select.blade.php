@php
    if (!isset($spaces))
        $spaces = 0;
    $tab = str_repeat('&nbsp;&nbsp;', $spaces);
@endphp
@foreach($categories as $category)
    <option value="{{ $category->id }}" {{ $current_category ? $current_category->parent_id == $category->id ? 'selected="selected"' : '' : '' }}>{!! $tab !!}{{ $category->name }}</option>
    @if(count($category->children))
        @include('admin.partials.categories.categories-select', ['categories' => $category->children, 'spaces' => $spaces + 1])
    @endif
@endforeach
