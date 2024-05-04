<div class="form-group">
    <label for="{{ $name }}">
        {{ $label }}
        @if($errorHandling)
            <span class="required">*</span>
        @endif
    </label>
    <input id="{{ $name }}" type="password" class="form-control @error($name) is-invalid @enderror {{ $extraClasses }}" placeholder="{{ $label }}" name="{{ $name }}">
    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>