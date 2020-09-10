<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $ingresos->fecha }}</p>
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

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ingresos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ingresos->updated_at }}</p>
</div>

