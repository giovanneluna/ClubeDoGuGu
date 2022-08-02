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
        </center>
        <br>
        <form action="{{ route('schedules.store') }}" method="POST">
            @csrf
            <center>
                <x-select :options="$clients" class="form-control" name="client_id" valueField="name"
                    label="Nome do Cliente" placeholder="Nome:" />
                <x-select :options="$blocks" class="form-control" name="block_id" valueField="block_type" label="Quadra"
                    placeholder="Quadra:" />
                <form class="row g-3">
                    <div class="col-md-4">
                        <label for="start">Data</label>
                        <input class="form-control" type="date" id="start" name="date" value="2022-07-22"
                            min="2022-01-01" max="2028-12-31">
                    </div>
                    <label>Tempo Inicial</label>
                    <input type="time" id="time" name="time" min="07:00" max="18:00"
                        value="$schedule->time" required>
                    <label>Tempo Final</label>
                    <input type="time" id="endTime" name="endTime" min="07:00" max="18:00"
                        value="$schedule->endTime" required>
                    <x-input name="total_price" placeholder="Ex:bola" type="text" label="Preço Total"
                        value="{{ old('total_price') }}" />
                    <label>Pago?</label>
                    <div>
                        <input class="form-check-input" type="checkbox" name="paid_out" value="1"
                            id="is_available">
                        <label class="form-check-label" for="is_available">
                            Sim
                        </label><br>
                        <input class="form-check-input" type="checkbox" name="paid_out" value="0"
                            id="is_available">
                        <label class="form-check-label" for="is_available">
                            Não
                        </label>
                    </div>
                    <x-input name="equipments_use" type="text" label="Quantidade de Equipamentos Usados na Quadra"
                        value="{{ old('equipments_use') }}" />

                    <x-select :options="$equipments" class="form-control" name="equipments_id" valueField="name"
                        label="Equipamentos" placeholder="Equipamentos:" />
                    <button type="submit" class="btn btn-primary">Criar</button>
                </form>
            </center>
    </body>

    </html>
</x-app-layout>
