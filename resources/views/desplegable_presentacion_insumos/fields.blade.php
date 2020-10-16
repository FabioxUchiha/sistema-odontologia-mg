<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    <input class="form-control"
    type="text-transform:uppercase;"
    onkeyup="javascript:this.value=this.value.toUpperCase();"
	type="text" name="nombre" required
    value="{{ $desplegablePresentacionInsumos->nombre ?? '' }}">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-danger']) !!}
    <a href="{{ route('desplegablePresentacionInsumos.index') }}" class="btn btn-default">Cancelar</a>
</div>