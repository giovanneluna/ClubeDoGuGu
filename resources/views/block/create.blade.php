<x-app-layout>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastro de Quadra</title>
    </head>

    <body>
        @if ($errors->any())


            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li><span>{{ $error }}</span></li>
                @endforeach
                </ul>
            </div>
        @endif
        <center>
            <H1>Cadastrar Quadra</H1>
        </center><br>
        <form action="{{ route('blocks.store') }}" method="POST">
            @csrf
            <center>

                <x-input name="block_type" placeholder="Ex:QuadraA" type="text" label="Tipo de Quadra"
                    value="{{ old('block_type') }}" />
                <x-input name="is_available" placeholder="1 ou 0" type="text" label="Esta Disponivel?"
                    value="{{ old('is_available') }}" />
                <x-input name="public_amount" type="text" label="Capacidade Total da Arquibancada"
                    value="{{ old('public_amount') }}" />
                <x-input name="local" type="text" label="Localização"
                    placeholder="Ex:A primeira direta da entrada do clube" value="{{ old('local') }}" />
                <x-input name="amount" type="text" label="Quantidade Total de Jogadores dentro da quadra"
                    value="{{ old('amount') }}" />
                <x-select :options="$sports" class="form-control" name="sport_id" label="Esporte" />
        </form>
        <button type="submit" class="btn btn-primary">Criar</button>

    </body>

    </html>
</x-app-layout>
