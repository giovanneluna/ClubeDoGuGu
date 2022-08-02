<x-app-layout>

    <head>
        <div class="p-3 mb-2 bg-dark text-white">
            <center>
                <h2>Agendamentos Cadastrados no Clube</h2>
            </center>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
                crossorigin="anonymous">
    </head>

    <body>
        <center><a href="{{ route('blocks.index') }}" button type="submit" class="btn btn-info">Voltar</button></a>
        </center>
        <br>
        <table class=" table table-bordered table text-white">
            <thead class="table-warning">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome do Cliente</th>
                    <th scope="col">Quadra</th>
                    <th scope="col">Data do Jogo</th>
                    <th scope="col">Inicio do Jogo</th>
                    <th scope="col">Fim do Jogo</th>
                    <th scope="col">Valor do Jogo</th>
                    <th scope="col">Pago</th>
                    <th scope="col">Status de Agendamento</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Deletar Agendamento</th>
                </tr>
            </thead>
            @foreach ($schedules as $schedule)
                <tbody class="table-group-divider">
                    <tr>
                        <td scope="row">{{ $schedule->id }}</td>
                        <td scope="row">{{ $schedule->client->name }}</td>
                        <td scope="row">{{ $schedule->block->block_type }} </td>
                        <td scope="row">{{ $schedule->date }}</td>
                        <td scope="row">{{ $schedule->time }}</td>
                        <td scope="row">{{ $schedule->endTime }}</td>
                        <td scope="row">{{ $schedule->total_price }}</td>
                        <td scope="row">{{ $schedule->paid_out ? 'Sim' : 'Não' }}</td>
                        <td scope="row">{{ $schedule->schedule_status->status }}</td>
                        <td scope="row"><a href="{{ route('schedules.edit', $schedule->id) }}"><button
                                    type="submit" class="btn btn-primary">Editar</button></a></td>
                        <td scope="row">
                            <form method="POST" action="{{ route('schedules.destroy', $schedule->id) }}">
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
