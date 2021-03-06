<div class="table-responsive">
    <table class="table" id="insumos-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha De Compra</th>
                <th>Cantidad</th>
                <th>Proveedor</th>
                <th>Fecha De Vencimiento</th>
                <th>Presentación</th>
                <th>Lote</th>
                <th colspan="3" class="col-md-1">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($insumos as $insumos)
            <tr>
                <td>{{ $insumos->nombre }}</td>
                <td>{{ $insumos->fecha_de_compra->format('Y/m/d') }}</td>
                <td>{{ $insumos->cantidad }}</td>
                <td>{{ $insumos->marca }}</td>
                <td>{{ $insumos->fecha_de_vencimiento->format('Y/m/d') }}
                            @if($insumos->fecha_de_vencimiento <= date('Y-m-d'))
                                <span class="badge">
                                    vencido
                                </span>
                            @else
                                    @if((date('Y')+1) < $insumos->fecha_de_vencimiento->format('Y'))
                                <span class="label label-success badge">
                                    vence
                                    {{$insumos->fecha_de_vencimiento->diffForHumans()}}
                                </span>
                                    @elseif((date('6')) > $insumos->fecha_de_vencimiento->format('m'))
                                <span class="label label-danger badge">
                                    vence
                                    {{$insumos->fecha_de_vencimiento->diffForHumans()}}
                                </span>
                                    @elseif((date('6')) <= $insumos->fecha_de_vencimiento->format('m'))
                                <span class="label label-warning badge">
                                    vence
                                    {{$insumos->fecha_de_vencimiento->diffForHumans()}}
                                </span>
                                    @endif
                                    {{-- {{ 'vence '.$insumos->fecha_de_vencimiento->diffForHumans() }} --}}
                            @endif
                </td>
                <td>{{ $insumos->presentacion }}</td>
                <td>{{ $insumos->lote }}</td>
                <td>
                    {!! Form::open(['route' => ['insumos.destroy', $insumos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('ver insumos')
                        <a href="{{ route('insumos.show', [$insumos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        @endcan
                        @can('editar insumos')
                        <a href="{{ route('insumos.edit', [$insumos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        @endcan
                        @can('borrar insumos')
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Está seguro de eliminar el registro?')"]) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
