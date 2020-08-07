<!-- Documento Field -->
<div class="form-group">
    {!! Form::label('documento', 'Documento:') !!}
    <p>{{ $notas->documento }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $notas->nombre }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $notas->telefono }}</p>
</div>

<!-- Procedimiento Field -->
<div class="form-group">
    {!! Form::label('procedimiento', 'Procedimiento:') !!}
    <p>{{ $notas->procedimiento }}</p>
</div>

<!-- Observaciones Field -->
<div class="form-group">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    <p>{{ $notas->observaciones }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $notas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $notas->updated_at }}</p>
</div>

