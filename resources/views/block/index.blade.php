<x-app-layout>

    <head>
        <div class="p-3 mb-2 bg-dark text-white">
            <center>
                <h2>Quadras Cadastradas no Clube</h2>
            </center>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
                crossorigin="anonymous">
    </head>

    <body>
        <center><a href="blocks/create" button type="submit" class="btn btn-info">Cadastrar
                Quadra</button></a></center>
        <br>

        <table class=" table table-bordered text-white">
            <thead class="table-warning">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Quadra</th>
                    <th scope="col">Local</th>
                    <th scope="col">Jogadores na Quadra</th>
                    <th scope="col">Tamanho da Arquibancada</th>
                    <th scope="col">Disponivel</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Agendar</th>
                    <th scope="col">Ver Agendamentos</th>
                    <th scope="col">Deletar Agendamento</th>
                </tr>
            </thead>
            @foreach ($blocks as $block)
                <tbody class="table-group-divider">
                    <tr>
                        <td scope="row">{{ $block->id }}</td>
                        <td scope="row">{{ $block->block_type }}</td>
                        {{-- <td scope="row">{{ $block->sport->name }}</td> --}}
                        <td scope="row">{{ $block->local }} </td>
                        <td scope="row">{{ $block->amount }}</td>
                        <td scope="row">{{ $block->public_amount }}</td>
                        <td scope="row">{{ $block->is_available == 1 ? 'Sim' : 'Não' }}</td>

                        <td scope="row"><a href="{{ route('blocks.edit', $block->id) }}"><button type="submit"
                                    class="btn btn-primary">Editar</button></a></td>

                        <td scope="row"><a href="blocks/{{ $block->id }}/schedules" type="submit"
                                class="btn btn-success">Agendar</a></td>

                        <td scope="row"><a href="{{ route('schedules.index') }}"><button type="submit"
                                    class="btn btn-warning">Ver
                                    Agendamentos</button></a></td>
                        <td scope="row">
                            <form method="POST" action="{{ route('blocks.destroy', $block->id) }}">
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
        </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>

    </body>


</x-app-layout>
