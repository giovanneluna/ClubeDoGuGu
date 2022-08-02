<x-app-layout>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar Cliente {{ $client->name }}</title>
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
        <form action="{{ route('clients.update', $client->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h1>
                <center>Editar Usuario {{ $client->name }}</center>
            </h1><br>
            <center>
                <form class="row g-3">
                    <div class="col-md-4">
                        <label>Nome do Cliente</label>
                        <input name="name" type="text" class="form-control"value="{{ $client->name }}">
                    </div>
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label>Email</label>
                            <input name="email" type="text" class="form-control"value="{{ $client->email }}">
                        </div>
                        <form class="row g-3">
                            <div class="col-md-4">
                                <label>CPF</label>
                                <input name="cpf" type="text" class="form-control"value="{{ $client->cpf }}">
                            </div>
                            <form class="row g-3">
                                <div class="col-md-4">
                                    <label>Telefone</label>
                                    <input name="telephone" type="text"
                                        class="form-control"value="{{ $client->telephone }}">
                                </div>
                                <form class="row g-3">
                                    <div class="col-md-4">
                                        <label>Idade</label>
                                        <input name="age" type="text"
                                            class="form-control"value="{{ $client->age }}">
                                    </div>
                                    <form class="row g-3">
                                        <div class="col-md-4">
                                            <label>Endereço</label>
                                            <input name="address" type="text"
                                                class="form-control"value="{{ $client->address }}">
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Editar</button>
                                    </form>
            </center>
        </form>
    </body>

    </html>
</x-app-layout>
