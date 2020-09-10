<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $inventario->nombre }}</p>
</div>

<!-- Categoria Field -->
<div class="form-group">
    {!! Form::label('categoria', 'Categoria:') !!}
    <p>{{ $inventario->categoria }}</p>
</div>

<!-- Marca Field -->
<div class="form-group">
    {!! Form::label('marca', 'Marca:') !!}
    <p>{{ $inventario->marca }}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $inventario->cantidad }}</p>
</div>

<!-- Unidad Medica Field -->
<div class="form-group">
    {!! Form::label('unidad_medica', 'Unidad Medica:') !!}
    <p>{{ $inventario->unidad_medica }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $inventario->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $inventario->updated_at }}</p>
</div>

