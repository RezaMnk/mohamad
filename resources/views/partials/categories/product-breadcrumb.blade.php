@foreach($categories as $category)
    <li class="breadcrumb-item">
        <a href="{{ $category->shop_route() }}">
            {{ $category->name }}
        </a>
    </li>
    @if(count($category->children))
        @include('partials.categories.product-breadcrumb', ['categories' => $category->children, 'spaces' => $spaces + 1])
    @endif
@endforeach
