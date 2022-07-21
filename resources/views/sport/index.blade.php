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
        <center><a href="sports/create" button type="submit" class="btn btn-primary">Cadastrar
                Esporte </button></a></center>
        <ul>
            @foreach ($sports as $sport)
                <br>
                <center>
                    Nome do Esporte:{{ $sport->name }}<br>
                    Equipamento:{{ $sport->equipment->name }}<br>
                    <a href="{{ route('sports.edit', $sport->id) }}"><button type="submit"
                            class="btn btn-primary">Editar</button></a>
                    <div>
                        <form method="POST" action="{{ route('sports.destroy', $sport->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <div class="form-group">
                                <input type="submit" class="btn btn-danger delete-user" value="DELETAR">
                            </div>
                </center>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
                </script>

    </body>
    </ul>
    @endforeach
</x-app-layout>
