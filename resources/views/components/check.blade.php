@props(['name' => '', 'disabled' => 'false', 'id' => '', 'label' => ''])

<div class="form-group">
    <input type="checkbox" {{ $attributes->merge(['name' => $name, 'id' => $id, 'disabled' => $disabled]) }}>

    <span class="form-check-label">
    </span>{{ $label }}
</div>
