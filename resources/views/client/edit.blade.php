<x-app-layout>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar Cliente {{$client->name}}</title>
    </head>

    <body>
        @foreach ($errors->all() as $error)
            <span>{{ $error }}</span>
        @endforeach

        <form action="{{ route('clients.update',$client->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h1><center>Editar Usuario {{$client->name}}</center></h1><br>
            <center>
            <div class="form-group">
                <label>Nome do Cliente</label>
                <input name="name" type="text" class="form-control"value="{{$client->name}}">
              </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="text" class="form-control"value="{{$client->email}}">
              </div>
            <div class="form-group">
                <label>CPF</label>
                <input name="cpf" type="text" class="form-control"value="{{$client->cpf}}">
              </div>
            <div class="form-group">
                <label>Telefone</label>
                <input name="telephone" type="text" class="form-control"value="{{$client->telephone}}">
              </div>
            <div class="form-group">
                <label>Idade</label>
                <input name="age" type="text" class="form-control"value="{{$client->age}}">
              </div>
              <div class="form-group">
                <label>Endereço</label>
                <input name="address" type="text" class="form-control"value="{{$client->address}}">
              </div>
<button>Editar</button>
            </center>
        </form>
    </body>

    </html>
    </x-app-layout>
