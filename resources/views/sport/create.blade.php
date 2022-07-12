<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Esporte</title>
</head>



<body>
    @foreach ($errors->all() as $error)
        <span>{{ $error }}</span>
    @endforeach

    <form action="{{ route('sports.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Esporte</label>
            <input name="sport" type="text" class="form-control"value="{{old('sport')}}">
          </div>
        <div class="form-group">
            <label>Capacidade Total de Pessoas</label>
            <input name="capacity" type="text" class="form-control"value="{{old('capacity')}}">
          </div>
        <div class="form-group">
            <label>Equipamentos Para o Esporte</label>
            <input name="equipment" type="text" class="form-control"value="{{old('equipment')}}">
          </div>
        <div class="form-group">
            <label>Tempo Total de Jogo</label>
            <input name="totalTime" type="text" class="form-control"value="{{old('totalTime')}}">
          </div>
        <div class="form-group">
            <label>Valor Total</label>
            <input name="value" type="text" class="form-control"value="{{old('value')}}">
          </div>
        <button>Criar</button>
    </form>
</body>

</html>
