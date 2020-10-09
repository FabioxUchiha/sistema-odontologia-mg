<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servicio', 'Servicio:') !!}
    {!! Form::text('servicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Detalle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('detalle', 'Detalle:') !!}
    {!! Form::text('detalle', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    <select name="tipo" class="form-control">
        <option type="text" value="">
            @if($ingresos->tipo ?? '')
            {{$ingresos->tipo}}
            @else
            Seleccione...
            @endif
        </option>
        <option type="text" value="Ingreso">
            Ingreso
        </option>
        <option value="Egreso">
            Egreso
        </option>
    </select>
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::number('precio', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-info']) !!}
    <a href="{{ route('ingresos.index') }}" class="btn btn-default">Cancelar</a>
</div>
