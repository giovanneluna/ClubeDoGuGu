<x-app-layout>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Esporte</title>
</head>



<body>
    @foreach ($errors->all() as $error)
        <span>{{ $error }}</span>
    @endforeach
    <center><h1>Cadastro de Esporte e Equipamento</h1></center><br>
    <form action="{{ route('sports.store') }}" method="POST">
        @csrf
        <center>
        <div class="form-group">
            <label>Esporte</label>
            <input name="name" type="text" class="form-control"value="{{old('name')}}">
          </div>
        <div class="form-group">
            <label>Equipamento</label>
            <input name="equipment" type="text" class="form-control"value="{{old('equipment')}}">
          </div>
        <button type="submit" class="btn btn-primary">Criar</button>
        </center>
    </form>
</body>

</html>

  </form>
</x-app-layout>
