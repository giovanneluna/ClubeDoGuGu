<x-app-layout>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">

    <div class="bg-info p-3">
        <div class="bg-info p-3">
            <h1>
                <p style="text-align:center;">Dados do Clube</p>
            </h1>
        </div>
        <div class="bg-dark p-1 text-white">
            <h2 style="text-align:center;">Cadastros do Sistema</h2>
        </div>
        <div class="p-2 mb-2 bg-success text-white">

            <h3 style="text-align:center;">Esportes Cadastrados </p>
                <a href="/sports/"><button type="button" class="btn btn-dark">Visualizar </button></a>
                <a href="sports/create"><button type="submit" class="btn btn-primary">Cadastrar</button></a>
                <p>
                    <hr>
                <h3 style="text-align:center;">Quadras Cadastradas </p>
                    <a href="/blocks/"><button type="button" class="btn btn-dark">Visualizar</button></a>
                    <a href="blocks/create"><button type="submit" class="btn btn-primary">Cadastrar</button></a>
                    <p>
                        <hr>
                    <h3 style="text-align:center;">Clientes Cadastrados </p>
                        <a href="/clients/"><button type="button" class="btn btn-dark">Visualizar</button></a>
                        <a href="clients/create"><button type="submit" class="btn btn-primary">Cadastrar</button></a>
                        <p>
                            <hr>
                        <h3 style="text-align:center;">Equipamentos Cadastrados </p>
                            <a href="/equipments"><button type="button"class="btn btn-dark">Visualizar</button></a>
                            <a href="equipments/create"><button type="submit"
                                    class="btn btn-primary">Cadastrar</button></a>
                            <a href="equipment-stocks"><button type="submit"
                                    class="btn btn-warning">Estoque</button></a>
                            <p>
                                <hr>
                            <h3 style="text-align:center;">Agendamentos Feitos </p><a href="/schedules/"><button
                                        type="button" class="btn btn-dark">Visualizar</button></a>

                                <p>

</x-app-layout>
