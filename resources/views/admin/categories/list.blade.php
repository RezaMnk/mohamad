<ol class="dd-list">
    @foreach($categories as $category)
        <li class="dd-item" data-id="{{ $category->id }}">
            <div class="nested-list-item">
{{--                edit button form--}}
                <form action="{{ route('admin.categories.edit', $category->id) }}" class="d-inline-block pr-2">
                    @csrf

                    <button type="submit" class="btn btn-default p-0">
                        <i class="fa fa-pencil font-size-12"></i>
                    </button>
                </form>
                {{ $category->name }}
            </div>
            @if(count($category->children))
                @include('admin.categories.list', ['categories' => $category->children])
            @endif
        </li>
    @endforeach
</ol>
