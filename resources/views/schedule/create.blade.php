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
        <form action="{{ route('schedules.store') }}" method="POST">
            @csrf
            <center>
                <form class="row g-3">
                    <div class="col-md-4">
                        <label>Quadra</label>
                        <select class="form-select" name="block_id">
                            @foreach ($blocks as $block)
                                <option selected disabled value=""></option>
                                <option value="{{ $block->id }}"> {{ $block->block_type }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label for="start">Data</label>
                            <input class="form-control" type="date" id="start" name="date" value="2022-07-22"
                                min="2022-01-01" max="2028-12-31">
                        </div>
                        <form class="row g-3">
                            <div class="col-md-3">
                                <label>Horas Maximas de Jogo</label>
                                <select class="form-select" name="time">
                                    <option selected disabled value=""></option>
                                    <option value="07:00">07:00 - 08:00</option>
                                    <option value="08:00">08:00 - 09:00</option>
                                    <option value="09:00">09:00 - 10:00</option>
                                    <option value="10:00">10:00 - 11:00</option>
                                    <option value="11:00">11:00 - 12:00</option>
                                    <option value="12:00">12:00 - 13:00</option>
                                    <option value="13:00">13:00 - 14:00</option>
                                    <option value="14:00">14:00 - 15:00</option>
                                    <option value="15:00">15:00 - 16:00</option>
                                    <option value="16:00">16:00 - 17:00</option>
                                    <option value="17:00">17:00 - 18:00</option>
                                    <option value="18:00">18:00 - 19:00</option>
                                </select>
                            </div>
                            <form class="row g-3">
                                <div class="col-md-4">
                                    <label>Preço Total</label>
                                    <input name="total_price" type="text"
                                        class="form-control"value="{{ old('total_price') }}">
                                </div>
                                <form class="row g-3">
                                    <div class="col-md-4">
                                        <label>Pago?</label>
                                        <input name="paid_out" type="text"
                                            class="form-control"value="{{ old('paid_out') }}">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Criar</button>
                                </form>
    </body>

    </html>
</x-app-layout>
