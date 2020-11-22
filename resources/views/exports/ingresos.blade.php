<table>
    <thead>
    <tr>
        <th>Fecha de servicio</th>
        <th>Servicio</th>
        <th>Detalle</th>
        <th>Tipo</th>
        <th>Precio</th>
        <th>Fecha de creación</th>
        <th>Fecha de modificación</th>
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
            <td>{{ $ingreso->created_at }}</td>
            <td>{{ $ingreso->updated_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
