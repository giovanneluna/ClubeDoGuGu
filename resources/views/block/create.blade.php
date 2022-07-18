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
            <input name="block_type" type="text" class="form-control"value="{{old('block_type')}}">
          </div>
        <div class="form-group">
            <label>Esta Disponivel</label>
            <input name="is_available" type="text" class="form-control"value="{{old('is_available')}}">
          </div>
        <div class="form-group">
            <label>Capacidade Total da Arquibancada</label>
            <input name="public_amount" type="text" class="form-control"value="{{old('public_amount')}}">
          </div>
        <div class="form-group">
            <label>Horas Maximas de Jogo</label>
            <select name="max_time">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
            </div>
        <div class="form-group">
            <label>Localização</label>
            <input name="local" type="text" class="form-control"value="{{old('local')}}">
          </div>
          <div class="form-group">
            <label>Quantidade Total de Jogadores dentro da Quadra</label>
            <input name="amount" type="text" class="form-control"value="{{old('amount')}}">
          </div>
          <div class="form-group">
            <label>Preço da Quadra</label>
            <input name="price" type="text" class="form-control"value="{{old('price')}}">
          </div>
        <button>Criar</button>
    </form>
</body>

</html>
</x-app-layout>
