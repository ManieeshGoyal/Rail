<div class="form-group row">
    <label class="col-md-2">{{ $label }}</label>
    <div class="image-input image-input-outline @error($name) is-invalid @enderror" id="kt_image_{{ time() }}">
        <div class="image-input-wrapper" style="background-image: url({{ $selectedFile }})"></div>
        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change {{ $label }}">
            <i class="fa fa-pen icon-sm text-muted"></i>
            <input type="file" name="{{ $name }}" accept="{{$accept}}"/>
            <input type="hidden" name="{{ $name }}_remove"/>
        </label>
        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel {{ $label }}">
            <i class="ki ki-bold-close icon-xs text-muted"></i>
        </span>
    </div>
    @error($name)
    <div class="invalid-feedback ml-2">{{ $message }}</div>
    @enderror
</div>
@push('footer')
<script type="text/javascript">
    var avatar1 = new KTImageInput('kt_image_{{ time() }}');
</script>
@endpush