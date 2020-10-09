<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha De Compra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_de_compra', 'Fecha De Compra:') !!}
    {!! Form::text('fecha_de_compra', null, ['class' => 'form-control','id'=>'fecha_de_compra']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha_de_compra').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca', 'Marca:') !!}
    {!! Form::text('marca', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha De Vencimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_de_vencimiento', 'Fecha De Vencimiento:') !!}
    {!! Form::text('fecha_de_vencimiento', null, ['class' => 'form-control','id'=>'fecha_de_vencimiento']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha_de_vencimiento').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Presentacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('presentacion', 'Presentacion:') !!}
    {!! Form::text('presentacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-danger']) !!}
    <a href="{{ route('insumos.index') }}" class="btn btn-default">Cancelar</a>
</div>
