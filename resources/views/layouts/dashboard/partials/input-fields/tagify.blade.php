<div class="form-group">
    <label>
        {{ $label }}
        @if($errorHandling)
            <span class="required">*</span>
        @endif
    </label>
    <input name="{{ $name }}" class="@error($name) is-invalid @enderror form-control" placeholder="{{ $label }}" value="" id="{{ str_replace('-', '_', \Illuminate\Support\Str::slug($name)) }}">
    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
@push('footer')
<script type="text/javascript">
    var tagify_{{ \Illuminate\Support\Str::slug($name) }} = new Tagify(document.getElementById('{{ str_replace('-', '_', \Illuminate\Support\Str::slug($name)) }}'), {
        enforceWhitelist: '{{ $enforceWhitelist }}',
        whitelist: JSON.parse('{!! $options !!}'),
        dropdown: {
            enabled: 0,
        },
    });
    tagify_{{ \Illuminate\Support\Str::slug($name) }}.addTags(JSON.parse('{!! $selectedInputs !!}'));
</script>
@endpush