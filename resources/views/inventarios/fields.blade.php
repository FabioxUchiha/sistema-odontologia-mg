<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    <select name="nombre" class="form-control">
        <option type="text" value="">
            Seleccione...
        </option>
        @foreach($desplegable_nombre_inventario->all() as $item)
            <option type="text" value="{{$item->nombre}}">
                {{$item->nombre}}
            </option>
        @endforeach
    </select>
</div>

<!-- Categoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria', 'Categoria:') !!}
    {!! Form::text('categoria', null, ['class' => 'form-control']) !!}
</div>

<!-- Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca', 'Marca:') !!}
    {!! Form::text('marca', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Unidad Medica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidad_medica', 'Unidad Medica:') !!}
    {!! Form::text('unidad_medica', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-info']) !!}
    <a href="{{ route('inventarios.index') }}" class="btn btn-default">Cancelar</a>
</div>
