<x-app-layout>

    <head>
        <div class="p-3 mb-2 bg-dark text-white">
            <center>
                <h2>Esportes Cadastrados no Clube</h2>
            </center>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
                crossorigin="anonymous">
    </head>

    <body>
        <center><a href="sports/create" button type="submit" class="btn btn-info">Cadastrar
                Esporte </button></a>
        </center>


        <br>
        <table class=" table table-bordered table text-white ">
            <thead class="table-warning">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Esporte</th>
                    <th scope="col">Nome do Equipamento</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Deletar</th>
                </tr>
            </thead>
            @foreach ($sports as $sport)
                <tbody class="table-group-divider">
                    <tr>
                        <td scope="row">{{ $sport->id }}</td>
                        <td scope="row">{{ $sport->name }}</td>
                        <td scope="row">{{ $sport->equipment->name }}</td>
                        <td scope="row"><a href="{{ route('sports.edit', $sport->id) }}"><button type="submit"
                                    class="btn btn-success ">Editar</button></a></td>
                        <td scope="row">
                            <form method="POST" action="{{ route('sports.destroy', $sport->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <div class="form-group">
                                    <input type="submit" class="btn btn-danger delete-user" value="DELETAR">
                                </div>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
            </script>
    </body>
</x-app-layout>
