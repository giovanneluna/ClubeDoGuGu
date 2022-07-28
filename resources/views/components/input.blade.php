@props(['disable' => 'false', 'value' => '', 'valueField' => 'name', 'classCol' => 'col-md-4', 'name' => '', 'type' => 'text', 'label' => '', 'options' => [], 'placeholder' => 'Preencha esse campo.', 'id' => ''])

<div class="form-group {{ $classCol }}">
    <label for="{{ $name }}">{{ $label }}</label>
    <input :placeholder="{{ $placeholder }}" value="{{ $value }}"
        {{ $attributes->merge(['class' => 'form-control', 'name' => $name, 'id' => $id, 'type' => $type]) }}>
</div>
