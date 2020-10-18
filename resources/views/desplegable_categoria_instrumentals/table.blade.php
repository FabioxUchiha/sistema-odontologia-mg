<div class="table-responsive">
    <table class="table" id="desplegableCategoriaInstrumentals-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($desplegableCategoriaInstrumentals as $desplegableCategoriaInstrumental)
            <tr>
                <td>{{ $desplegableCategoriaInstrumental->nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['desplegableCategoriaInstrumentals.destroy', $desplegableCategoriaInstrumental->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('ver desplegables')
                            <a href="{{ route('desplegableCategoriaInstrumentals.show', [$desplegableCategoriaInstrumental->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        @endcan
                        @can('editar desplegables')
                            <a href="{{ route('desplegableCategoriaInstrumentals.edit', [$desplegableCategoriaInstrumental->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
