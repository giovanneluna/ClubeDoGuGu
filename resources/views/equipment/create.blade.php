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
                <x-input name="name" placeholder="Ex:bola" type="text" label="Nome do Equipamento" />
                <x-input name="description" type="text" label="Descrição do Equipamento" />
                <x-select :options="$equipment_types" class="form-control" name="equipment_type_id" valueField="name"
                    label="Tipo de Equipamento" />
                <br>
                <button type="submit" class="btn btn-primary">Criar</button>

            </center>
        </form>
    </body>

    </html>
</x-app-layout>
