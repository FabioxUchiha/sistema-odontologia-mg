<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    <select name="nombre" class="form-control">
        <option type="text" value="{{$inventario->nombre ?? ''}}">
            @if($inventario->nombre ?? '')
            {{$inventario->nombre}}
            @else
            Seleccione...
            @endif
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
    <select name="categoria" class="form-control">
        <option type="text" value="{{$inventario->categoria ?? ''}}">
            @if($inventario->categoria ?? '')
            {{$inventario->categoria}}
            @else
            Seleccione...
            @endif
        </option>
        @foreach($desplegable_categoria_instrumental->all() as $item)
            <option type="text" value="{{$item->nombre}}">
                {{$item->nombre}}
            </option>
        @endforeach
    </select>
</div>

<!-- Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca', 'Marca:') !!}
    <select name="marca" class="form-control">
        <option type="text" value="{{$inventario->marca ?? ''}}">
            @if($inventario->marca ?? '')
            {{$inventario->marca}}
            @else
            Seleccione...
            @endif
        </option>
        @foreach($desplegable_marca_instrumental->all() as $item)
            <option type="text" value="{{$item->nombre}}">
                {{$item->nombre}}
            </option>
        @endforeach
    </select>
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Instrumental Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_instrumental', 'Estado Instrumental:') !!}
    {!! Form::text('estado_instrumental', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-info']) !!}
    <a href="{{ route('inventarios.index') }}" class="btn btn-default">Cancelar</a>
</div>
