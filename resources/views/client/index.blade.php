<x-app-layout>

    <head>

        <div class="p-3 mb-2 bg-dark text-white">
            <h1>Buscar Cliente</h1>
            <section class="section">
                <form class="d-flex" role="Procurar" action="{{ route('clients.index') }}" method="GET">
                    <input type="text" id="search" name="search" class="form-control me-2" type="search"
                        placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Procurar</button>
            </section>
            </form>
            <center>
                <h2>Clientes Cadastrados no Clube</h2>
            </center>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
                crossorigin="anonymous">
    </head>

    <body>
        <center><a href="clients/create" button type="submit" class="btn btn-info">Cadastrar
                Cliente</button></a></center><br>

        <table class=" table table-bordered table text-white">
            <thead class="table-warning">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome do Cliente</th>
                    <th scope="col">Email</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Número de Telefone</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Deletar</th>
                </tr>
            </thead>
            @foreach ($clients as $client)
                <tbody class="table-group-divider">
                    <tr>
                        <td scope="row">{{ $client->id }}</td>
                        <td scope="row">{{ $client->name }}</td>
                        <td scope="row">{{ $client->email }}</td>
                        <td scope="row">{{ $client->cpf }}</td>
                        <td scope="row">{{ $client->telephone }}</td>
                        <td scope="row">{{ $client->age }}</td>
                        <td scope="row">{{ $client->address }}</td>
                        <td scope="row"><a href="{{ route('clients.edit', $client->id) }}"><button type="submit"
                                    class="btn btn-success ">Editar</button></a></td>
                        <td scope="row">
                            <form method="POST" action="{{ route('clients.destroy', $client->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <div class="form-group">
                                    <input type="submit" class="btn btn-danger delete-user" value="DELETAR">
                                </div>
                            </form>
                        </td>
            @endforeach
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
            </script>

    </body>
    <div class="py-4">
        {{ $clients->links() }}
    </div>
</x-app-layout>
