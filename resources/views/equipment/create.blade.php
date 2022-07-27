<x-app-layout>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastro de Equipamento</title>
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
            <h1>Cadastrar Equipamento</h1>
        </center> <br>
        <form action="{{ route('equipments.store') }}" method="POST">
            @csrf
            <center>
                <form class="row g-3">
                    <div class="col-md-4">
                        <label>Equipamento</label>
                        <input name="name" placeholder="Ex:Bola" type="text"
                            class="form-control"value="{{ old('name') }}">
                    </div>
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label>Quantidade Para Criar</label>
                            <input name="description" type="text"
                                class="form-control"value="{{ old('description') }}">
                        </div>
                        <x-select :options="$equipment_types" class="form-control" name="equipment_type_id" valueField="name"
                            label="Tipo de Equipamento" />
                        <br>
                        <button type="submit" class="btn btn-primary">Criar</button>

            </center>
        </form>
    </body>

    </html>
</x-app-layout>
