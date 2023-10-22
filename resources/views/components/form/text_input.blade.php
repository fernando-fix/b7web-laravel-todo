<div class="inputArea">
    <label for="{{ $name }}">
        {{ $label }}
    </label>
    <input type="{{ $type ?? 'text' }}" name="{{ $name }}" id="{{ $name }}"
        placeholder="{{ $placeholder ?? '' }}" {{ empty($required) ? '' : 'required' }}>
</div>
