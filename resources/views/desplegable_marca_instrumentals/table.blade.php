<div class="table-responsive">
    <table class="table" id="desplegableMarcaInstrumentals-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($desplegableMarcaInstrumentals as $desplegableMarcaInstrumental)
            <tr>
                <td>{{ $desplegableMarcaInstrumental->nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['desplegableMarcaInstrumentals.destroy', $desplegableMarcaInstrumental->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('desplegableMarcaInstrumentals.show', [$desplegableMarcaInstrumental->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('desplegableMarcaInstrumentals.edit', [$desplegableMarcaInstrumental->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
