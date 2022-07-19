<x-app-layout>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Criar Agendamento</title>
    </head>

    <body>
        @foreach ($errors->all() as $error)
            <span>{{ $error }}</span>
        @endforeach
        <center>
            <h1>Criar Agendamento</h1>
        </center><br>
        <form action="{{ route('schedules.update', $schedule->id) }}" method="POST">
            @csrf
            @method('PUT')
            <center>
                <form class="row g-3">
                    <div class="col-md-4">
                        <label>Tempo de Jogo (Horas)</label>
                        <input name="time" type="text" class="form-control"value="{{ $schedule->time }}">
                    </div>
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label>Horario de Inicio</label>
                            <input name="start_time" type="time"
                                class="form-control"value="{{ $schedule->start_time }}">
                        </div>
                        <form class="row g-3">
                            <div class="col-md-4">
                                <label>Horario de Termino</label>
                                <input name="end_time" type="time"
                                    class="form-control"value="{{ $schedule->end_time }}">
                            </div>
                            <form class="row g-3">
                                <div class="col-md-4">
                                    <label>Preço Total</label>
                                    <input name="total_price" type="text"
                                        class="form-control"value="{{ $schedule->total_price }}">
                                </div>
                                <form class="row g-3">
                                    <div class="col-md-4">
                                        <label>Pago?</label>
                                        <input name="paid_out" type="text"
                                            class="form-control"value="{{ $schedule->paid_out }}">
                                    </div>
                                    <form class="row g-3">
                                        <div class="col-md-4">
                                            <label>Quadras</label>
                                            <select class="form-select" name="block_id">
                                                @foreach ($blocks as $block)
                                                    <option value="{{ $block->id }}"> {{ $block->block_type }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <button type="submit" class="btn btn-primary">Criar</button>
                                    </form>
    </body>

    </html>
</x-app-layout>
