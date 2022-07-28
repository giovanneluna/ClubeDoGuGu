@props(['value' => '', 'valueField' => 'name', 'classCol' => 'col-md-4', 'name' => '', 'type' => 'text', 'label' => '', 'options' => [], 'placeholder' => 'Selecione uma opção.', 'id' => ''])

<div class="form-group {{ $classCol }}">
    <label for="{{ $name }}">{{ $label }}</label>
    <select {{ $attributes->merge(['class' => 'form-control', 'name' => $name, 'id' => $id, 'type' => $type]) }}>
        {{-- <option :placeholder="$placeholder"value="{{ $value }}">{{ $valueField }}</option> --}}

        @foreach ($options as $key => $option)
            @if ($value == $key)
                <option selected value="{{ $option->id }}">
                    {{ $option->name }}
                </option>
            @endif
            <option value="{{ $option->id }}">
                {{ $option->name }}
            </option>
        @endforeach
    </select>
</div>
