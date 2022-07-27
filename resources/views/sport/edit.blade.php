<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editor de Esporte</title>
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
            <h1>Editar dados do Esporte</h1>
        </center><br>
        <form action="{{ route('sports.update', $sport->id) }}" method="POST">
            @csrf
            @method('PUT')
            <center>
                <form class="row g-3">
                    <div class="col-md-4">
                        <label>Esporte</label>
                        <input name="name" type="text" class="form-control"value="{{ $sport->name }}">
                    </div>
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label>Equipamento</label>
                            <select class="form-select" name="equipments_id">
                                @foreach ($equipments as $equipment)
                                    <option value="{{ $equipment->id }}"> {{ $equipment->name }} </option>
                                @endforeach
                            </select>

                        </div>
                        <x-select :options="$equipments" class="form-control" name="equipments_id" valueField="name"
                            label="Equipamento" />

                        <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
    </body>

    </html>

    </form>
</x-app-layout>
