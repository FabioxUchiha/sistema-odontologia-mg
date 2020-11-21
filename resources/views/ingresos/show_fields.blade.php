<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $ingresos->fecha->format('Y/m/d') }}</p>
</div>

<!-- Servicio Field -->
<div class="form-group">
    {!! Form::label('servicio', 'Servicio:') !!}
    <p>{{ $ingresos->servicio }}</p>
</div>

<!-- Detalle Field -->
<div class="form-group">
    {!! Form::label('detalle', 'Detalle:') !!}
    <p>{{ $ingresos->detalle }}</p>
</div>

<!-- Tipo Field -->
<div class="form-group">
    {!! Form::label('tipo', 'Tipo:') !!}
    <p>{{ $ingresos->tipo }}</p>
</div>

<!-- Precio Field -->
<div class="form-group">
    {!! Form::label('precio', 'Precio:') !!}
    <p>{{ $ingresos->precio }}</p>
</div>

<!-- Creado el Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{{ $ingresos->created_at }}</p>
</div>

<!-- Actualizado el Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Editado el:') !!}
    <p>{{ $ingresos->updated_at }}</p>
</div>

