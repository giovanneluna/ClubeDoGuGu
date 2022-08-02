<x-app-layout>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar Estoque</title>
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
            <h1>Edição de Estoque</h1>
        </center> <br>
        <form action="{{ route('equipment-stocks.update', $equipmentStock->id) }}" method="POST">
            @csrf
            @method('PUT')
            <center>
                <x-input name="quantity" value="{{ $equipmentStock->quantity }}" type="number" label="Quantidade" />
                <form class="row g-3">
                    <div class="col-md-4">
                        <label>Equipamento</label>
                        <select class="form-select" name="equipments_id">
                            @foreach ($equipments as $equipment)
                                <option value="{{ $equipment->id }}" @if ($equipment->id == $equipmentStock->equipments_id) selected @endif>
                                    {{ $equipment->name }} </option>
                            @endforeach
                        </select>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Criar</button>
            </center>
        </form>
    </body>

    </html>
</x-app-layout>
