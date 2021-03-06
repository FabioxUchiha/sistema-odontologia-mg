<div class="table-responsive">
    <table class="table" id="notas-table">
        <thead>
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Tipo de documento</th>
                <th>Teléfono</th>
                <th>Procedimiento</th>
                <th>Observaciones</th>
                <th colspan="3" class="col-md-1">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notas as $notas)
                <tr>
                    <td>{{ $notas->documento }}</td>
                    <td>{{ $notas->nombre }}</td>
                    <td>{{ $notas->tipo_documento }}</td>
                    <td>{{ $notas->telefono }}</td>
                    <td>{{ $notas->procedimiento }}</td>
                    <td>{{ $notas->observaciones }}</td>
                    <td>
                        {!! Form::open(['route' => ['notas.destroy', $notas->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>

                            @can('ver notas')
                                <a href="{{ route('notas.show', [$notas->id]) }}" class='btn btn-default btn-xs'><i
                                        class="glyphicon glyphicon-eye-open"></i></a>
                            @endcan

                            @can('editar notas')
                                <a href="{{ route('notas.edit', [$notas->id]) }}" class='btn btn-default btn-xs'><i
                                        class="glyphicon glyphicon-edit"></i></a>
                            @endcan

                            @can('borrar notas')
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class'
                                => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Está seguro de eliminar el registro?')"]) !!}
                            @endcan
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
