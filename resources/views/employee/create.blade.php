<x-app-layout>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastrar Cliente</title>
    </head>

    <body>
        @if ($errors->any())


            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    <li><span>{{ $error }}</span></li>
                @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('clients.store') }}" method="POST">
            @csrf
            <h1>
                <center>Cadastro do Cliente</center>
            </h1><br>
            <center>
                <form class="row g-3">
                    <div class="col-md-4">
                        <label>Nome do Cliente</label>
                        <input name="name" type="text" class="form-control"value="{{ old('name') }}">
                    </div>
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label>Email</label>
                            <input name="email" type="text" class="form-control"value="{{ old('email') }}">
                        </div>
                        <form class="row g-3">
                            <div class="col-md-4">
                                <label>CPF</label>
                                <input name="cpf" type="text" placeholder="Ex:12345678911"
                                    class="form-control"value="{{ old('cpf') }}">
                            </div>
                            <form class="row g-3">
                                <div class="col-md-4">
                                    <label>Telefone</label>
                                    <input name="telephone" type="text"placeholder="Ex:38998..."
                                        class="form-control"value="{{ old('telephone') }}">
                                </div>
                                <form class="row g-3">
                                    <div class="col-md-4">
                                        <label>Idade</label>
                                        <input name="age" type="text" placeholder="(Min:15)"
                                            class="form-control"value="{{ old('age') }}">
                                    </div>
                                    <form class="row g-3">
                                        <div class="col-md-4">
                                            <label>Endereço</label>
                                            <input name="address" type="text"
                                                class="form-control"value="{{ old('address') }}">
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
            </center>
        </form>

    </body>

    </html>
</x-app-layout>
