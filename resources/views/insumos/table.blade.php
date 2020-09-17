<div class="table-responsive">
    <table class="table" id="insumos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Fecha De Compra</th>
        <th>Cantidad</th>
        <th>Marca</th>
        <th>Fecha De Vencimiento</th>
        <th>Presentacion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($insumos as $insumos)
            <tr>
                <td>{{ $insumos->nombre }}</td>
                <td>{{ $insumos->fecha_de_compra }}</td>
                <td>{{ $insumos->cantidad }}</td>
                <td>{{ $insumos->marca }}</td>
                <td>{{ $insumos->fecha_de_vencimiento }}
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
                <td>
                    {!! Form::open(['route' => ['insumos.destroy', $insumos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('ver_insumos')
                        <a href="{{ route('insumos.show', [$insumos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        @endcan
                        @can('editar_insumos')
                        <a href="{{ route('insumos.edit', [$insumos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        @endcan
                        @can('borrar_insumos')
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
