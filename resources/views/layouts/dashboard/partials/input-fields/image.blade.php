<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <div class="image-container">
        <div class="image-wrapper">
            @foreach($medias as $media)
                <div class="img-elements" style="background-image: url('{{ $media->url }}')" data-image="{{ $media->id }}">
                    <a href="javascript:void(0)" class="image-remover"><i class="fas fa-times-circle"></i></a>
                </div>
            @endforeach
        </div>
    </div>
    <a id="{{ $name }}" href="javascript:void(0);" class="image-selector" data-toggle="modal" data-target="#media-library">{{ $label }}</a>
    <input type="hidden" name="{{ $name }}" value="{{ $default }}">
</div>