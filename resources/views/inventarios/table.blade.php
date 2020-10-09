<div class="table-responsive">
    <table class="table" id="inventarios-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Marca</th>
                <th>Cantidad</th>
                <th>Unidad Medica</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($inventarios as $inventario)
            <tr>
                <td>{{ $inventario->nombre }}</td>
                <td>{{ $inventario->categoria }}</td>
                <td>{{ $inventario->marca }}</td>
                <td>{{ $inventario->cantidad }}</td>
                <td>{{ $inventario->unidad_medica }}</td>
                <td>
                    {!! Form::open(['route' => ['inventarios.destroy', $inventario->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('ver inventarios')
                        <a href="{{ route('inventarios.show', [$inventario->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        @endcan
                        @can('editar inventarios')
                        <a href="{{ route('inventarios.edit', [$inventario->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        @endcan
                        @can('borrar inventarios')
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
