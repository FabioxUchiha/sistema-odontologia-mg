@extends('layouts.app')

@section('content')
<style>
#suma{display:none;}
</style>
    <section class="content-header">
        <h1 class="pull-left">Ingresos y Egresos</h1>
        <h1 class="pull-right">
            @can('crear_inventarios')
           <a class="btn btn-danger pull-right" style="margin-top: -1px;margin-bottom: 5px;margin-left: 5px" href="{{ route('ingresos.create') }}">Agregar Ingreso o Egreso</a>
            @endcan
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('ingresos.table')
            </div>
        </div>
        <div class="text-right">
        <div id="suma">
            @foreach($ingresosDia->all() as $diario)
            @if($diario->tipo == 'Ingreso')
                {{ $total += $diario->precio }}
            @endif
            @if($diario->tipo == 'Egreso')
                {{ $total -= $diario->precio }}
            @endif
            @endforeach
        </div>
            <button type="button" class="btn btn-primary">
                Ingresos hoy <span class="badge badge-light">{{ $total }}</span>
            </button>
        </div>
    </div>
@endsection

