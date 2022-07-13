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
            <label>Dia da Semana</label>
            <input name="day" type="text" class="form-control"value="{{old('day')}}">
          </div>
        <div class="form-group">
            <label>Horario de Inicio</label>
            <input name="startTime" type="time" class="form-control"value="{{old('startTime')}}">
          </div>
        <div class="form-group">
            <label>Horario de Termino</label>
            <input name="endTime" type="time" class="form-control"value="{{old('endTime')}}">
          </div>
        <div class="form-group">
            <label>Data do Jogo</label>
            <input name="date" type="date" class="form-control"value="{{old('date')}}">
          </div>
        <div class="form-group">
            <label>Preço a Pagar</label>
            <input name="priceToPay" type="text" class="form-control"value="{{old('priceToPay')}}">
          </div>
          <div class="form-group">
            <label>Quadras</label>
            <select name="block_id">
                @foreach ($blocks as $block)
                <option value="{{ $block->id }}"> {{$block->blocktype}} </option>

                @endforeach
            </select>

          </div>
        <button>Criar</button>
    </form>
</body>

</html>
</x-app-layout>
