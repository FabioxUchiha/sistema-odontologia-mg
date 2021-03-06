<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control','id'=>'fecha', 'required']) !!}
</div>

@push('scripts')
<script type="text/javascript">
    hoyFecha();
    $('#fecha').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: true,
        sideBySide: true,
        minDate:'-2020/01/01',
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

<!-- Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servicio', 'Servicio:') !!}
    <select name="servicio" class="form-control" required>
        <option type="text" value="{{$ingresos->servicio ?? ''}}">
            @if($ingresos->servicio ?? '')
                {{$ingresos->servicio}}
            @else
                Seleccione...
            @endif
        </option>
        @foreach($desplegable_servicio_ingresos->all() as $servicio)
            <option type="text" value="{{$servicio->nombre}}">
                {{$servicio->nombre}}
            </option>
        @endforeach
    </select>
</div>


<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    <select name="tipo" class="form-control" required>
        <option type="text" value="{{$ingresos->tipo ?? ''}}">
            @if($ingresos->tipo ?? '')
            {{$ingresos->tipo}}
            @else
            Seleccione...
            @endif
        </option>
        <option type="text" value="Ingreso">
            Ingreso
        </option>
        <option value="Egreso">
            Egreso
        </option>
    </select>
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio en pesos colombianos:') !!}
    {!! Form::number('precio', null, ['class' => 'form-control', 'required', 'pattern'=>'^[1-9]+', 'title'=>'El valor debe contener numeros mayores a 50 pesos', 'placeholder' => 'Ingrese el valor sin puntos ni comas']) !!}
</div>

<!-- Detalle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('detalle', 'Detalle:') !!}
    {!! Form::textarea('detalle', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-danger']) !!}
    <a href="{{ route('ingresos.index') }}" class="btn btn-default">Cancelar</a>
</div>
