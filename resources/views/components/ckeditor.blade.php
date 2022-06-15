<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    @if(is_array($textAreaId))
        @foreach($textAreaId as $id)
            CKEDITOR.replace('{{ $id }}');
        @endforeach
    @else
        CKEDITOR.replace('{{ $textAreaId }}');
    @endif
</script>
