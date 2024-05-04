<div class="form-group">
    <label for="{{ $name }}">
        {{ $label }}
        @if($errorHandling)
            <span class="required">*</span>
        @endif
    </label>
    <input id="{{ $name }}" type="number" class="form-control @error($name) is-invalid @enderror {{ $extraClasses }}" placeholder="{{ $label }}" name="{{ $name }}" value="{{ old($name) && !is_array(old($name)) ? old($name) : $default }}" {{ isset($minimum) ? 'min="' . $minimum . '"' : '' }} {{ isset($maximum) ? 'max="' . $maximum . '"' : '' }} {{ $disabled ? 'disabled' : '' }} >
    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>