<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $desplegableServicioIngreso->nombre }}</p>
</div>

<!-- Creado el Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{{ $desplegableServicioIngreso->created_at }}</p>
</div>

<!-- Actualizado el Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{{ $desplegableServicioIngreso->updated_at }}</p>
</div>

