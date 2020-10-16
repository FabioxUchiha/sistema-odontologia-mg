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

<!-- Tipo de documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_documento', 'Tipo de documento:') !!}
    <select name="tipo_documento" class="form-control">
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
    {{-- <input class="form-control"
    type="text-transform:uppercase;"
    onkeyup="javascript:this.value=this.value.toUpperCase();"
    type="text" name="tipo_documento" required
    value="{{ $notas->tipo_documento ?? '' }}"> --}}
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
