<script src="https://cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.config.language = 'fa';

    CKEDITOR.config.contentsCss = '{{ asset('admin/css/font/primary-iran-yekan.css') }}';
    CKEDITOR.config.font_names = 'primary-font';
    CKEDITOR.config.font_defaultLabel = 'primary-font';
    CKEDITOR.config.filebrowserImageBrowseUrl = '/file-manager/ckeditor?leftDisk=product-descriptions'


    @if(is_array($textAreaId))
        @foreach($textAreaId as $id)
            CKEDITOR.replace('{{ $id }}');
        @endforeach
    @else
        CKEDITOR.replace('{{ $textAreaId }}');
    @endif

</script>
