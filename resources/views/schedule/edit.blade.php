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
        @if ($errors->any())


            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li><span>{{ $error }}</span></li>
                @endforeach
                </ul>
            </div>
        @endif
        <center>
            <h1>Criar Agendamento</h1>
        </center><br>
        <form action="{{ route('schedules.update', $schedule->id) }}" method="POST">
            @csrf
            @method('PUT')
            <center>
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
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label for="start">Data</label>
                            <input class="form-control" type="date" id="start" name="trip-start"
                                value="{{ $schedule->total_price }}" value="2022-07-22" min="2022-01-01"
                                max="2028-12-31">
                        </div>
                        <form class="row g-3">
                            <div class="col-md-3">
                                <label>Horas Maximas de Jogo</label>
                                <select class="form-select" name="max_time" value="{{ $schedule->total_price }}">
                                    <option selected disabled value=""></option>
                                    <option>07:00 - 08:00</option>
                                    <option>08:00 - 09:00</option>
                                    <option>09:00 - 10:00</option>
                                    <option>10:00 - 11:00</option>
                                    <option>11:00 - 12:00</option>
                                    <option>12:00 - 13:00</option>
                                    <option>13:00 - 14:00</option>
                                    <option>14:00 - 15:00</option>
                                    <option>15:00 - 16:00</option>
                                    <option>16:00 - 17:00</option>
                                    <option>17:00 - 18:00</option>
                                    <option>18:00 - 19:00</option>
                                </select>
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

                                    <button type="submit" class="btn btn-primary">Criar</button>
                                </form>
    </body>

    </html>
</x-app-layout>
