<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
     <select name="nombre" class="form-control" required>
        <option type="text" value="{{$insumos->nombre ?? ''}}">
            @if($insumos->nombre ?? '')
            {{$insumos->nombre}}
            @else
            Seleccione...
            @endif
        </option>
        @foreach($desplegableNombreInsumos->all() as $item)
            <option type="text" value="{{$item->nombre}}">
                {{$item->nombre}}
            </option>
        @endforeach
    </select>
</div>

<!-- Fecha De Compra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_de_compra', 'Fecha De Compra:') !!}
    {!! Form::text('fecha_de_compra', null, ['class' => 'form-control','id'=>'fecha_de_compra', 'required']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        hoyFecha();
        $('#fecha_de_compra').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true,
            maxDate:`+${fechaActual}`
        })
        function hoyFecha(){
        var hoy = new Date();
        var dd = hoy.getDate()+1;
        var mm = (hoy.getMonth()+1);
        var yyyy = hoy.getFullYear();

        fechaActual = yyyy+'/'+mm+'/'+dd;
        return yyyy+'/'+mm+'/'+dd;
    }

    </script>
@endpush

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control', 'min' => 1, 'required', 'pattern'=>'^[1-9]\d*$']) !!}
</div>

<!-- Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca', 'Proveedor:') !!}
    <select name="marca" class="form-control">
        <option type="text" value="{{$insumos->marca ?? ''}}">
            @if($insumos->marca ?? '')
            {{$insumos->marca}}
            @else
            Seleccione...
            @endif
        </option>
        @foreach($desplegableMarcaInsumos->all() as $item)
            <option type="text" value="{{$item->nombre}}">
                {{$item->nombre}}
            </option>
        @endforeach
    </select>
</div>

<!-- Fecha De Vencimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_de_vencimiento', 'Fecha De Vencimiento:') !!}
    {!! Form::text('fecha_de_vencimiento', null, ['class' => 'form-control','id'=>'fecha_de_vencimiento', 'required']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha_de_vencimiento').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Presentacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('presentacion', 'Presentación:') !!}
    <select name="presentacion" class="form-control" required>
        <option type="text" value="{{$insumos->presentacion ?? ''}}">
            @if($insumos->presentacion ?? '')
            {{$insumos->presentacion}}
            @else
            Seleccione...
            @endif
        </option>
        @foreach($desplegablePresentacionInsumos->all() as $item)
            <option type="text" value="{{$item->nombre}}">
                {{$item->nombre}}
            </option>
        @endforeach
    </select>
</div>

<!-- Lote Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lote', 'Lote:') !!}
    <input class="form-control"
    type="text-transform:uppercase;"
    onkeyup="javascript:this.value=this.value.toUpperCase();"
    type="text" name="lote"
    value="{{ $insumos->lote ?? '' }}">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-danger']) !!}
    <a href="{{ route('insumos.index') }}" class="btn btn-default">Cancelar</a>
</div>
