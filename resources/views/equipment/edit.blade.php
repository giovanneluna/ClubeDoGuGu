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
            <h1>Editar Dados do Equipamento</h1>
        </center>
        <form action="{{ route('equipments.update', $equipment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <center>
                <form class="row g-3">
                    <div class="col-md-4">
                        <label>Equipamento</label>
                        <input name="name" type="text" class="form-control"value="{{ $equipment->name }}"
                            readonly="true">
                    </div>
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label>Quantidade Para Criar</label>
                            <input name="description" type="text"
                                class="form-control"value="{{ $equipment->description }}">
                        </div>
                        <form class="row g-3">
                            <div class="col-md-4">
                                <label>Tipo de Equipamento</label>
                                <select class="form-select" name="equipment_type_id" readonly="true">
                                    @foreach ($equipment_types as $equipment_type)
                                        <option readonly="true" value="{{ $equipment_type->id }}">
                                            {{ $equipment_type->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-primary">Editar</button>
                        </form>
                        <center>
    </body>

    </html>
</x-app-layout>
