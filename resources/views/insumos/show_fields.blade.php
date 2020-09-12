<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $insumos->nombre }}</p>
</div>

<!-- Fecha De Compra Field -->
<div class="form-group">
    {!! Form::label('fecha_de_compra', 'Fecha De Compra:') !!}
    <p>{{ $insumos->fecha_de_compra }}</p>
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
    <p>{{ $insumos->fecha_de_vencimiento }}</p>
</div>

<!-- Presentacion Field -->
<div class="form-group">
    {!! Form::label('presentacion', 'Presentacion:') !!}
    <p>{{ $insumos->presentacion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $insumos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $insumos->updated_at }}</p>
</div>

