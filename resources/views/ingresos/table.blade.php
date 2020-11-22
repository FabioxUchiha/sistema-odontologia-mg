<div class="table-responsive">
    <table class="table" id="ingresos-table">
        <thead>
            <tr>
                <th>Fecha</th>
        <th>Servicio</th>
        <th>Detalle</th>
        <th>Tipo</th>
        <th>Precio</th>
                <th colspan="3" class="col-md-1 col-sm-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ingresos as $ingresos)
            <tr>
                <td>{{ $ingresos->fecha->format('Y/m/d') }}</td>
                <td>{{ $ingresos->servicio }}</td>
                <td>{{ $ingresos->detalle }}</td>
                <td>{{ $ingresos->tipo }}</td>
                <td>{{ $ingresos->precio }}</td>
                <td>
                    {!! Form::open(['route' => ['ingresos.destroy', $ingresos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                         @can('ver inventarios')
                        <a href="{{ route('ingresos.show', [$ingresos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                         @endcan
                         @can('editar inventarios')
                        <a href="{{ route('ingresos.edit', [$ingresos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                         @endcan
                         @can('borrar inventarios')
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Está seguro de eliminar el registro?')"]) !!}
                         @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
