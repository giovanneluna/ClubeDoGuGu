<x-app-layout>
    <head>
        <div class="p-3 mb-2 bg-dark text-white">
<center><h2>Esportes Cadastrados no Clube</h2></center>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>

<ul>
@foreach ($schedules as $schedule)


       <br>
       <center>
       Nome do Esporte:{{ $schedule->name }}<br>
       Capacidade de Jogadores na Quadra:{{ $schedule->capacity }}<br>
       Equipamento:{{ $schedule->equipment }}<br>
       Tempo Total de Jogo:{{ $schedule->totalTime }}<br>
       Valor do Jogo:{{ $schedule->value }}<br>
       </center>


       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </body>
</ul>

@endforeach
</x-app-layout>