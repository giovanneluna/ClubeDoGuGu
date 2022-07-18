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

        <ul>
            @foreach ($blocks as $block)
                <br>
                <center>
                    Tipo de quadra:{{ $block->block_type }}<br>
                    Localização:{{ $block->local }}<br>
                    Quantidade de Jogadores Dentro da Quadra:{{ $block->amount }}<br>
                    Tamanho da Arquibancada:{{ $block->public_amount }}<br>
                    Tempo Maximo:{{ $block->max_time }}<br>
                    Preço:{{ $block->price }}<br>
                    Disponivel:{{ $block->is_available }}<br>
                    <a href="{{ route('blocks.edit', $block->id) }}"><button type="submit">Editar</button></a>
                    <div>
                        <form method="POST" action="{{ route('blocks.destroy', $block->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div class="form-group">
                                <input type="submit" class="btn btn-danger delete-user" value="DELETAR">
                            </div>
                        </form>
                </center>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
                </script>

    </body>
    </ul>
    @endforeach
</x-app-layout>
