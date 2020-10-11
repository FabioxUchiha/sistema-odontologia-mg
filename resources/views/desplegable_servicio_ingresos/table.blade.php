<div class="table-responsive">
    <table class="table" id="desplegableServicioIngresos-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($desplegableServicioIngresos as $desplegableServicioIngreso)
            <tr>
                <td>{{ $desplegableServicioIngreso->nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['desplegableServicioIngresos.destroy', $desplegableServicioIngreso->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('desplegableServicioIngresos.show', [$desplegableServicioIngreso->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('desplegableServicioIngresos.edit', [$desplegableServicioIngreso->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estas seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
