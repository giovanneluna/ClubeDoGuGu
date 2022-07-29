@props(['value' => '', 'valueField' => 'name', 'classCol' => 'col-md-4', 'name' => '', 'type' => 'text', 'label' => '', 'options' => [], 'placeholder' => 'Selecione uma opção.', 'id' => ''])

<div class="form-group {{ $classCol }}">
    <label for="{{ $name }}">{{ $label }}</label>
    <select {{ $attributes->merge(['class' => 'form-control', 'name' => $name, 'id' => $id, 'type' => $type]) }}>
        <option selected disabled value="{{ $value }}">{{ $placeholder }}</option>
        @foreach ($options as $option)
            <option value="{{ $option->id }}">
                {{ $option->$valueField }}
            </option>
        @endforeach

    </select>
</div>
