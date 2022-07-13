<x-app-layout>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Quadra</title>
</head>

<body>
    @foreach ($errors->all() as $error)
        <span>{{ $error }}</span>
    @endforeach

    <form action="{{ route('blocks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Tipo de Quadra</label>
            <input name="blocktype" type="text" class="form-control"value="{{old('blocktype')}}">
          </div>
        <div class="form-group">
            <label>Esta Disponivel</label>
            <input name="is_available" type="text" class="form-control"value="{{old('is_available')}}">
          </div>
        <div class="form-group">
            <label>Capacidade Total da Arquibancada</label>
            <input name="publicamount" type="text" class="form-control"value="{{old('publicamount')}}">
          </div>
        <div class="form-group">
            <label>Tempo Maximo de Jogo</label>
            <input name="maxtime" type="text" class="form-control"value="{{old('maxtime')}}">
          </div>
        <div class="form-group">
            <label>Valor Total</label>
            <input name="price" type="text" class="form-control"value="{{old('price')}}">
          </div>
        <button>Criar</button>
    </form>
</body>

</html>
</x-app-layout>
