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
                <x-input name="name" type="text" placeholder="Ex:Gustavo" label="Nome do Cliente"
                    value="{{ old('name') }}" />
                <x-input name="email" type="text" placeholder="Ex:gustavo@gmail.com" label="Email"
                    value="{{ old('email') }}" />
                <x-input name="cpf" type="text" placeholder="Ex:12345678911" label="CPF"
                    value="{{ old('cpf') }}" />
                <x-input name="telephone" type="text" placeholder="Ex:38998191556" label="Telefone"
                    value="{{ old('telephone') }}" />
                <x-input name="age" type="text" placeholder="Min:15" label="Idade"
                    value="{{ old('age') }}" />
                <x-input name="address" type="text" placeholder="Ex:Rua Santos Luiz 777" label="Endereço"
                    value="{{ old('address') }}" />
                <br>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </center>
        </form>
    </body>
</x-app-layout>
