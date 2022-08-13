@if($category->parent_id == 0)
    <li @class(['nav-item', 'dropdown' => $category->children])>
        <a @class(['nav-link', 'dropdown-toggle' => count($category->children)]) href="{{ route('home.shop', $category->id) }}">
            {{ $category->name }}
        </a>
        @if(count($category->children))
            @each('partials.categories.header', $category->children, 'category')
        @endif
    </li>
@else
    <ul class="dropdown-menu">
        <li @class(['dropdown' => count($category->children)])>
            <a @class(['dropdown-item', 'dropdown-toggle' => count($category->children)]) href="{{ route('home.shop', $category->id) }}">
                {{ $category->name }}
            </a>
            @if(count($category->children))
                @each('partials.categories.header', $category->children, 'category')
            @endif
        </li>
    </ul>
@endif
