<ol class="dd-list">
    @foreach($list as $item)
        <li class="dd-item" data-id="{{ $item->id }}">
            <div class="nested-list-item">
                <a href="{{ route('admin.categories.edit', $item->id) }}" class="d-inline-block pr-2">
                    <button type="submit" class="btn btn-default p-0">
                        <i class="fa fa-pencil font-size-12"></i>
                    </button>
                </a>

                {{ $item->name }}
            </div>
            @if(count($item->children))
                @include('admin.categories.categories-list', ['list' => $item->children])
            @endif
        </li>
    @endforeach
</ol>
