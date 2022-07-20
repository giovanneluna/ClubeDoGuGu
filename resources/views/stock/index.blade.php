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

        <ul>
            @foreach ($stock_equips as $stock_equip)
                <br>
                <center>
                    Quantidade:{{ $stock_equip->quantity }}<br>
                    Nome do Equipamento:{{ $stock_equip->equipment->name }}<br>
                    <br>
                    <a href="{{ route('stock/index', $equipment->id) }}"><button type="submit"
                            class="btn btn-primary">Editar</button></a>

    </body>
    </ul>
    @endforeach
</x-app-layout>
