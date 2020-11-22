<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Marca</th>
        <th>Cantidad</th>
        <th>Estado instrumental</th>
        <th>Fecha de creación</th>
        <th>Fecha de modificación</th>
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
            <td>{{ $inventarios->created_at }}</td>
            <td>{{ $inventarios->updated_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
