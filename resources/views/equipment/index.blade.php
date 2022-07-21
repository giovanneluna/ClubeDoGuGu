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
        <center><a href="equipments/create" button type="submit" class="btn btn-primary">Cadastrar
                Equipamento</button></a></center>
        <ul>
            @foreach ($equipments as $equipment)
                <br>
                <center>
                    Nome do Equipamento:{{ $equipment->name }}<br>
                    Tipo de Equipamento:{{ $equipment->equipment_type->name }}<br>
                    Quantidade de Equipamentos:{{ $equipment->description }}<br>
                    <br>
                    <a href="{{ route('equipments.edit', $equipment->id) }}"><button type="submit"
                            class="btn btn-primary">Editar</button></a>
                    <div>
                        <form method="POST" action="{{ route('equipments.destroy', $equipment->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <div class="form-group">
                                <input type="submit" class="btn btn-danger delete-user" value="DELETAR">
                            </div>
                        </form>
                    </div>

    </body>
    </ul>
    @endforeach
</x-app-layout>
