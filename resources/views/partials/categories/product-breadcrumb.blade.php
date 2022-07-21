@if($category->parent)
    @include('partials.categories.product-breadcrumb', ['category' => $category->parent])
@endif
<li class="breadcrumb-item">
    <a href="{{ $category->shop_route() }}">
        {{ $category->name }}
    </a>
</li>
