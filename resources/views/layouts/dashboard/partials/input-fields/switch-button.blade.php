<div class="form-group">
    <span class="switch switch-sm switch-icon switch-outline switch-success">
        <label>
            <input type="checkbox" name="{{ $name }}" value="{{ $value }}" {{ $checked ? 'checked' : ''}}/>
            <span></span>
        </label>
        &nbsp;
        <label class="col-form-label">{{ $label }}</label>
   </span>
</div> 