<!-- Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('documento', 'Documento:') !!}
    {!! Form::number('documento', null, ['class' => 'form-control', 'pattern'=>'^[1-9]\d*$', 'required']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    <input class="form-control"
    type="text-transform:uppercase;"
    onkeyup="javascript:this.value=this.value.toUpperCase();"
    type="text" name="nombre" required
    pattern="^[A-Za-záéíóúÁÉÍÓÚ ]+$"
    title="El nombre de usuario solo debe contener letras"
    value="{{ $notas->nombre ?? '' }}">
</div>

<!-- Tipo de documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_documento', 'Tipo de documento:') !!}
    <select name="tipo_documento" required class="form-control">
        <option type="text" value="{{$notas->tipo_documento ?? ''}}">
            @if($notas->tipo_documento ?? '')
                {{$notas->tipo_documento}}
            @else
                Seleccione...
            @endif
        </option>
        <option type="text" value="CC">
            CC
        </option>
        <option type="text" value="TI">
            TI
        </option>
        <option type="text" value="PEP">
            PEP
        </option>
        <option type="text" value="PA">
            PA
        </option>
        <option type="text" value="CE">
            CE
        </option>
        <option type="text" value="SIN DOCUMENTO">
            SIN DOCUMENTO
        </option>
    </select>
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Teléfono:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control', 'required', 'pattern'=>'[0-9]{7,10}']) !!}
</div>

<!-- Procedimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedimiento', 'Procedimiento:') !!}
    <select name="procedimiento" class="form-control" required>
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
    {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-danger']) !!}
    <a href="{{ route('notas.index') }}" class="btn btn-default">Cancelar</a>
</div>
