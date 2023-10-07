<div class="container">
    <table class="table table-light table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">Ações</th>
                <th scope="col">Espécie</th>
                <th scope="col">Quantidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($especies as $especie)
                <tr>
                    <th scope="row"></th>
                    <td scope="row">{{ $especie->especie }}</td>
                    <td scope="row"> N/A </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
