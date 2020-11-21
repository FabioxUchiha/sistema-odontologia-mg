<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $insumos->nombre }}</p>
</div>

<!-- Fecha De Compra Field -->
<div class="form-group">
    {!! Form::label('fecha_de_compra', 'Fecha De Compra:') !!}
    <p>{{ $insumos->fecha_de_compra->format('Y/m/d') }}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $insumos->cantidad }}</p>
</div>

<!-- Marca Field -->
<div class="form-group">
    {!! Form::label('marca', 'Marca:') !!}
    <p>{{ $insumos->marca }}</p>
</div>

<!-- Fecha De Vencimiento Field -->
<div class="form-group">
    {!! Form::label('fecha_de_vencimiento', 'Fecha De Vencimiento:') !!}
    <p>{{ $insumos->fecha_de_vencimiento->format('Y/m/d') }}</p>
</div>

<!-- Presentacion Field -->
<div class="form-group">
    {!! Form::label('presentacion', 'Presentacion:') !!}
    <p>{{ $insumos->presentacion }}</p>
</div>

<!-- Creado el Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{{ $insumos->created_at }}</p>
</div>

<!-- Actualizado el Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{{ $insumos->updated_at }}</p>
</div>

