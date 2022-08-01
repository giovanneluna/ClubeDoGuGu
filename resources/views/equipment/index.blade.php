<x-app-layout>

    <head>
        <div class="p-3 mb-2 bg-dark text-white">
            <center>
                <h2>Equipamentos Cadastrados no Sistema</h2>
            </center>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
                crossorigin="anonymous">
    </head>

    <body>
        <center>
            <a href="equipments/create" button type="submit" class="btn btn-info">Cadastrar
                Equipamento</button></a>
        </center><br>

        <table class=" table table-bordered table text-white">
            <thead class="table-warning">
                <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Nome do Equipamento</th>
                    <th scope="col">Tipo de Equipamento</th>
                    <th scope="col">Descrição do Equipamento</th>
                    <th scope="col">Estoque</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Deletar</th>
                </tr>
            </thead>
            @foreach ($equipments as $equipment)
                <tbody class="table-group-divider">
                    <tr>
                        <td scope="row">{{ $equipment->id }}</td>
                        <td scope="row">{{ $equipment->name }}</td>
                        <td scope="row">{{ $equipment->equipment_type->name }}</td>
                        <td scope="row">{{ $equipment->description }}</td>
                        <td scope="row">
                            {{ $equipment?->equipment_stock?->quantity ? $equipment->equipment_stock->quantity : 0 }}
                        </td>
                        <td scope="row"><a href="{{ route('equipments.edit', $equipment->id) }}"><button
                                    type="submit" class="btn btn-success ">Editar</button></a></td>
                        <td scope="row">
                            <form method="POST" action="{{ route('equipments.destroy', $equipment->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <div class="form-group">
                                    <input type="submit" class="btn btn-danger delete-user" value="DELETAR">
                                </div>
                            </form>
                        </td>

                    </tr>
                    </center>
    </body>
    @endforeach
</x-app-layout>
