<x-app-layout>

    <head>
        <div class="p-3 mb-2 bg-dark text-white">
            <center>
                <h2>Estoque de Equipamentos</h2>
            </center>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
                crossorigin="anonymous">
    </head>

    <body>
        <center><a href="equipment-stocks/create" button type="submit" class="btn btn-primary">Cadastrar
                Esporte </button></a></center>
        <ul>
            @foreach ($equipmentStocks as $equipmentStock)
                <br>
                <center>
                    <li>

                        Quantidade:{{ $equipmentStock->quantity }}<br>
                        Equipamento:{{ $equipmentStock->equipment->name }}<br>

                    </li>
                    <br>
                    <a class="btn btn-primary" href="{{ route('equipment-stocks.edit', $equipmentStock->id) }}">Editar</a>
                </center>
        </ul>
    </body>
    @endforeach
</x-app-layout>
