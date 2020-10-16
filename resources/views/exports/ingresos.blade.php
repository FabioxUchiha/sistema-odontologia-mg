<table>
    <thead>
    <tr>
        <th>Fecha</th>
        <th>Servicio</th>
        <th>Detalle</th>
        <th>Tipo</th>
        <th>Precio</th>
    </tr>
    </thead>
    <tbody>
    @foreach($ingresos as $ingreso)
        <tr>
            <td>{{ $ingreso->fecha }}</td>
            <td>{{ $ingreso->servicio }}</td>
            <td>{{ $ingreso->detalle }}</td>
            <td>{{ $ingreso->tipo }}</td>
            <td>{{ $ingreso->precio }}</td>
        </tr>
    @endforeach
    </tbody>
</table>