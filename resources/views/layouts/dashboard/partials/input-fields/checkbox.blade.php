<div class="form-group">
    <div class="checkbox-list">
        <label class="checkbox {{ $extraClasses }}">
            <input type="checkbox" name="{{ $name }}" value="{{ $value }}" {{ $checked ? 'checked' : ''}}>
            <span></span> {{ $label }}
        </label>
    </div>
</div>