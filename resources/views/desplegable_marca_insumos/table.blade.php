<div class="table-responsive">
    <table class="table" id="desplegableMarcaInsumos-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($desplegableMarcaInsumos as $desplegableMarcaInsumos)
            <tr>
                <td>{{ $desplegableMarcaInsumos->nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['desplegableMarcaInsumos.destroy', $desplegableMarcaInsumos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('ver desplegables')
                            <a href="{{ route('desplegableMarcaInsumos.show', [$desplegableMarcaInsumos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        @endcan
                        @can('editar desplegables')
                            <a href="{{ route('desplegableMarcaInsumos.edit', [$desplegableMarcaInsumos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
