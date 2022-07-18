<x-app-layout>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastro de Equipamento</title>
    </head>

    <body>
        @foreach ($errors->all() as $error)
            <span>{{ $error }}</span>
        @endforeach

        <form action="{{ route('equipments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Equipamento</label>
                <input name="blocktype" type="text" class="form-control"value="{{old('blocktype')}}">
              </div>
            <div class="form-group">
                <label>Quantidade Para Criar</label>
                <input name="is_available" type="text" class="form-control"value="{{old('is_available')}}">
              </div>
            <button>Criar</button>
        </form>
    </body>

    </html>
    </x-app-layout>
