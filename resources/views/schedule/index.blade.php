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
        <center><a href="{{ route('blocks.index') }}" button type="submit" class="btn btn-primary">Voltar</button></a>
        </center>
        <ul>
            @foreach ($schedules as $schedule)
                <br>
                <center>
                    Quadra Agendada:{{ $schedule->block->block_type }}<br>
                    Horario do Jogo:{{ $schedule->time }}<br>
                    Preço:{{ $schedule->total_price }}<br>
                    Pago?:{{ $schedule->paid_out }}<br>
                    <br>
                    <form method="GET"action="{{ route('schedules.edit', $schedule->id) }}">
                        <div class="form-group">
                            {{ csrf_field() }}
                            {{ method_field('EDIT') }}
                            <input type="submit" class="btn btn-primary" value="Editar">
                        </div>

                    </form>
                    <div>
                        <form method="POST" action="{{ route('schedules.destroy', $schedule->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <div class="form-group">
                                <input type="submit" class="btn btn-danger delete-user" value="DELETAR">
                            </div>
                </center>
                </form>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
                </script>

    </body>
    </ul>
    @endforeach
</x-app-layout>
