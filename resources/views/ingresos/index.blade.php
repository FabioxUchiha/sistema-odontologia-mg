@extends('layouts.app')

@section('content')
<style>
#suma{display:none;}
</style>
    <section class="content-header">
        <h1 class="pull-left">Ingresos</h1>
        <h1 class="pull-right">
            @can('crear_inventarios')
           <a class="btn btn-info pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('ingresos.create') }}">Agregar Ingreso o Egreso</a>
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
                {{ $total += $diario->precio }}
            @endforeach
        </div>
            <button type="button" class="btn btn-primary">
                Ingresos hoy <span class="badge badge-light">{{ $total }}</span>
            </button>
        </div>
    </div>
@endsection

