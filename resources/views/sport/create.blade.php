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
        <title>Cadastro de Esporte</title>
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
            <h1>Cadastro de Esporte</h1>
        </center><br>
        <form action="{{ route('sports.store') }}" method="POST">
            @csrf
            <center>
                <x-input name="name" placeholder="Ex:Futebol" type="text" label="Esporte"
                    value="{{ old('name') }}" />
                <x-select :options="$equipments" class="form-control" name="equipments_id" valueField="name"
                    label="Equipamento" />
                <button type="submit" class="btn btn-primary">Criar</button>
            </center>
        </form>
    </body>

    </html>

</x-app-layout>
