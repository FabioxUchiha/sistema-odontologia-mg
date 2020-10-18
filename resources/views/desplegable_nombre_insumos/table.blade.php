<div class="table-responsive">
    <table class="table" id="desplegableNombreInsumos-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($desplegableNombreInsumos as $desplegableNombreInsumos)
            <tr>
                <td>{{ $desplegableNombreInsumos->nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['desplegableNombreInsumos.destroy', $desplegableNombreInsumos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('ver desplegables')
                            <a href="{{ route('desplegableNombreInsumos.show', [$desplegableNombreInsumos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        @endcan
                        @can('crear desplegables')
                            <a href="{{ route('desplegableNombreInsumos.edit', [$desplegableNombreInsumos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        @endcan
                        @can('borrar desplegables')
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
