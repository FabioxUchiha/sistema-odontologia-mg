<div class="table-responsive">
    <table class="table" id="desplegablePresentacionInsumos-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($desplegablePresentacionInsumos as $desplegablePresentacionInsumos)
            <tr>
                <td>{{ $desplegablePresentacionInsumos->nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['desplegablePresentacionInsumos.destroy', $desplegablePresentacionInsumos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('ver desplegables')
                            <a href="{{ route('desplegablePresentacionInsumos.show', [$desplegablePresentacionInsumos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        @endcan
                        @can('editar desplegables')
                            <a href="{{ route('desplegablePresentacionInsumos.edit', [$desplegablePresentacionInsumos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
