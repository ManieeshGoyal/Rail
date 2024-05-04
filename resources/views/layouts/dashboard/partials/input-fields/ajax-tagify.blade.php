<div class="form-group">
    <label>
        {{ $label }}
        @if($errorHandling)
            <span class="required">*</span>
        @endif
    </label>
    <input name="{{ $name }}" class="@error($name) is-invalid @enderror form-control" placeholder="{{ $label }}" value="" id="{{ \Illuminate\Support\Str::slug($name) }}">
    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<script type="text/javascript">
    var tagify_{{ \Illuminate\Support\Str::slug($name) }} = new Tagify(document.querySelector('#{{ \Illuminate\Support\Str::slug($name) }}'), {
        enforceWhitelist: '{{ $enforceWhitelist }}',
        whitelist: JSON.parse('{!! $options !!}'),
        dropdown: {
            enabled: 1,
        },
    });
</script>

