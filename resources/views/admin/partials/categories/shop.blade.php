@php
    if (!isset($spaces))
        $spaces = 0;
    $tab = str_repeat('&nbsp;', $spaces);
@endphp
@foreach($categories as $category)
    @if($spaces == 0 && !$loop->first)
        <hr class="my-1">
    @endif
        <div class="form-check">
        {!! $tab !!}
        <input type="radio" class="form-check-input" name="category" value="{{ $category->id }}" {{ (old('category') ?? (isset($product) ? $product->categories->first()->id : '')) == $category->id ? 'checked' : '' }} id="category-{{ $category->id }}" required>
        <label class="form-check-label" for="category-{{ $category->id }}">{{ $category->name }}</label>
    </div>
    @if (count($category->children))
        @include('admin.partials.categories.shop', ['categories' => $category->children, 'spaces' => $spaces + 1])
    @endif
@endforeach
