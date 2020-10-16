<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Marca</th>
        <th>Cantidad</th>
        <th>Estado instrumental</th>
    </tr>
    </thead>
    <tbody>
    @foreach($inventarios as $inventarios)
        <tr>
            <td>{{ $inventarios->nombre }}</td>
            <td>{{ $inventarios->categoria }}</td>
            <td>{{ $inventarios->marca }}</td>
            <td>{{ $inventarios->cantidad }}</td>
            <td>{{ $inventarios->estado_instrumental }}</td>
        </tr>
    @endforeach
    </tbody>
</table>