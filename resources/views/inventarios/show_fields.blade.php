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

<!-- Estado Instrumental Field -->
<div class="form-group">
    {!! Form::label('estado_instrumental', 'Estado Instrumental:') !!}
    <p>{{ $inventario->estado_instrumental }}</p>
</div>

<!-- Creado el Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{{ $inventario->created_at }}</p>
</div>

<!-- Actualizado el Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{{ $inventario->updated_at }}</p>
</div>

