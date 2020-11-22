<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Fecha de compra</th>
        <th>Cantidad</th>
        <th>Marca</th>
        <th>Fecha de vencimiento</th>
        <th>Presentacion</th>
        <th>Lote</th>
        <th>Fecha de creación</th>
        <th>Fecha de modificación</th>
    </tr>
    </thead>
    <tbody>
    @foreach($insumos as $insumo)
        <tr>
            <td>{{ $insumo->nombre }}</td>
            <td>{{ $insumo->fecha_de_compra }}</td>
            <td>{{ $insumo->cantidad }}</td>
            <td>{{ $insumo->marca }}</td>
            <td>{{ $insumo->fecha_de_vencimiento }}</td>
            <td>{{ $insumo->presentacion }}</td>
            <td>{{ $insumo->lote }}</td>
            <td>{{ $insumo->created_at }}</td>
            <td>{{ $insumo->updated_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
