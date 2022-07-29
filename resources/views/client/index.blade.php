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


        <center><a href="clients/create" button type="submit" class="btn btn-primary">Cadastrar
                Cliente</button></a></center>

        <ul>
            @foreach ($clients as $client)
                <br>
                <hr>
                <center>
                    Nome do Cliente:{{ $client->name }}<br>
                    Email:{{ $client->email }}<br>
                    CPF:{{ $client->cpf }}<br>
                    Numero de Telefone:{{ $client->telephone }}<br>
                    Idade:{{ $client->age }}<br>
                    Endereço:{{ $client->address }}<br>
                    <a href="{{ route('clients.edit', $client->id) }}"><button type="submit"
                            class="btn btn-primary">Editar</button></a>
                    <div>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-id="{{ $client->id }}">Deletar
                        </button>

                    </div>
                    <hr>
                </center>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
                </script>

    </body>
    </ul>


    <center>
        <div class="py-4">
            {{ $clients->links() }}
        </div>
    </center>
    <!-- Modal -->
    <form data-bs-toggle="modal" data-bs-target="#exampleModal" method="POST"
        action="{{ route('clients.destroy', $client->id) }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    </form>
    <div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title " id="exampleModalLabel">Confirmação</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir esse usuario?<li>
                        {{ $client->name }}
                    </li>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form data-bs-toggle="modal" data-bs-target="#exampleModal" method="POST"
                        action="{{ route('clients.destroy', $client->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <input type="submit" class="btn btn-danger delete-user" value="DELETAR">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
