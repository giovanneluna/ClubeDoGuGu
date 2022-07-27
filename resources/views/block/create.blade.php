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

                <form class="row g-3">
                    <div class="col-md-4">
                        <label>Tipo de Quadra</label>
                        <input name="block_type" type="text" placeholder="Ex:QuadraA"
                            class="form-control"value="{{ old('block_type') }}">
                    </div>
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label>Esta Disponivel</label>
                            <input name="is_available" type="text"
                                class="form-control"value="{{ old('is_available') }}">
                        </div>
                        <form class="row g-3">
                            <div class="col-md-4">
                                <label>Capacidade Total da Arquibancada</label>
                                <input name="public_amount" type="text"
                                    class="form-control"value="{{ old('public_amount') }}">
                            </div>
                            <form class="row g-3">
                                <form class="row g-3">
                                    <div class="col-md-4">
                                        <label>Localização</label>
                                        <input name="local" type="text"
                                            placeholder="Ex:A primeira direta da entrada do clube"
                                            class="form-control"value="{{ old('local') }}">
                                    </div>
                                    <form class="row g-3">
                                        <div class="col-md-4">
                                            <label>Quantidade Total de Jogadores dentro da Quadra</label>
                                            <input name="amount" type="text"
                                                class="form-control"value="{{ old('amount') }}">
                                        </div>
                                        <x-select :options="$sports" class="form-control" name="sport_id"
                                            label="Esporte" />
                                    </form>
                                    <button type="submit" class="btn btn-primary">Criar</button>

    </body>

    </html>
</x-app-layout>
