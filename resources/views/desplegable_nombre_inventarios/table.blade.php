<div class="table-responsive">
    <table class="table" id="desplegableNombreInventarios-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($desplegableNombreInventarios as $desplegableNombreInventario)
            <tr>
                <td>{{ $desplegableNombreInventario->nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['desplegableNombreInventarios.destroy', $desplegableNombreInventario->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('ver desplegables')
                            <a href="{{ route('desplegableNombreInventarios.show', [$desplegableNombreInventario->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        @endcan
                        @can('editar desplegables')
                            <a href="{{ route('desplegableNombreInventarios.edit', [$desplegableNombreInventario->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        @endcan
                        @can('borrar desplegables')
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
