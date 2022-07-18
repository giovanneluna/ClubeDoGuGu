<x-app-layout>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Agendamento</title>
</head>

<body>
    @foreach ($errors->all() as $error)
        <span>{{ $error }}</span>
    @endforeach

    <form action="{{ route('schedules.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Tempo de Jogo (Horas)</label>
            <input name="time" type="text" class="form-control"value="{{old('time')}}">
          </div>
        <div class="form-group">
            <label>Horario de Inicio</label>
            <input name="start_time" type="time" class="form-control"value="{{old('start_time')}}">
          </div>
        <div class="form-group">
            <label>Horario de Termino</label>
            <input name="end_time" type="time" class="form-control"value="{{old('end_time')}}">
          </div>
        <div class="form-group">
            <label>Preço Total</label>
            <input name="total_price" type="date" class="form-control"value="{{old('total_price')}}">
          </div>
        <div class="form-group">
            <label>Pago?</label>
            <input name="paid_out" type="text" class="form-control"value="{{old('paid_out')}}">
          </div>
          <div class="form-group">
            <label>Quadras</label>
            <select name="block_id">
                @foreach ($blocks as $block)
                <option value="{{ $block->id }}"> {{$block->block_type}} </option>

                @endforeach
            </select>

          </div>
        <button>Criar</button>
    </form>
</body>

</html>
</x-app-layout>
