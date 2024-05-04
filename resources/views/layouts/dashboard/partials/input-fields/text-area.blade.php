<div class="form-group">
    <label for="{{ $name }}">
        {{ $label }}
        @if($errorHandling)
            <span class="required">*</span>
        @endif
    </label>
    <textarea id="{{ $name }}" type="text" class="form-control {{ $extraClasses }} @error($name) is-invalid @enderror" placeholder="{{ $label }}" name="{{ $name }}">{{ old($name) ?? $default }}</textarea>
    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>