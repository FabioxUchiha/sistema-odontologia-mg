<!-- Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('documento', 'Documento:') !!}
    {!! Form::number('documento', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    <input class="form-control"
    type="text-transform:uppercase;"
    onkeyup="javascript:this.value=this.value.toUpperCase();"
    type="text" name="nombre" required
    value="{{ $notas->nombre ?? '' }}">
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Procedimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedimiento', 'Procedimiento:') !!}
    <select name="procedimiento" class="form-control">
        <option type="text" value="{{$notas->procedimiento ?? ''}}">
            @if($notas->procedimiento ?? '')
                {{$notas->procedimiento}}
            @else
                Seleccione...
            @endif
        </option>
        @foreach($desplegable_servicio_ingresos->all() as $procedimiento)
            <option type="text" value="{{$procedimiento->nombre}}">
                {{$procedimiento->nombre}}
            </option>
        @endforeach
    </select>
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-danger']) !!}
    <a href="{{ route('notas.index') }}" class="btn btn-default">Cancelar</a>
</div>
