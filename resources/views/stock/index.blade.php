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
        <center><a href="equipment-stocks/create" button type="submit" class="btn btn-info">Cadastrar
                Estoque </button></a>
        </center>
        <br>

        <table class=" table table-bordered table text-white">
            <thead class="table-warning">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Equipamento</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Deletar</th>
                </tr>
            </thead>
            @foreach ($equipmentStocks as $equipmentStock)
                <tbody class="table-group-divider">
                    <tr>
                        <td scope="row">{{ $equipmentStock->id }}</td>
                        <td scope="row">{{ $equipmentStock->equipment->name }}</td>
                        <td scope="row">{{ $equipmentStock->quantity }}</td>
                        <td scope="row"><a href="{{ route('equipment-stocks.edit', $equipmentStock->id) }}"><button
                                    type="submit" class="btn btn-success ">Editar</button></a></td>
                        <td scope="row">
                            <form method="POST" action="{{ route('equipment-stocks.destroy', $equipmentStock->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <div class="form-group">
                                    <input type="submit" class="btn btn-danger delete-user" value="DELETAR">
                                </div>
                            </form>
                        </td>
            @endforeach
    </body>
</x-app-layout>
