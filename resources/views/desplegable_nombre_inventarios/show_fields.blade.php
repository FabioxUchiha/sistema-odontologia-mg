<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $desplegableNombreInventario->nombre }}</p>
</div>

<!-- Creado el Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{{ $desplegableNombreInventario->created_at }}</p>
</div>

<!-- Actualizado el Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{{ $desplegableNombreInventario->updated_at }}</p>
</div>

