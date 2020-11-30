@extends('layouts.app')

@section('content')
<style>
#suma{display:none;}
</style>
    <section class="content-header">
        <h1 class="pull-left">Ingresos y Egresos</h1>
        <h1 class="pull-right">
            @can('crear inventarios')
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
                <nav class="">
                    <form class="form-inline">
                        <input
                        class="form-control mr-sm-2 shadow"
                        name="buscarporfecha" type="text" placeholder="Buscar por fecha"
                        onfocus="(this.type='date')"
                        onblur="(this.type='text')" min="2020-01-01" max="2053-12-31">
                        <input
                        class="form-control mr-sm-2 shadow"
                        name="buscarporservicio" type="search" placeholder="Buscar por servicio">
                        <input
                        class="form-control mr-sm-2 shadow"
                        name="buscarportipo" type="search" placeholder="Buscar por tipo">
                        <button class="btn btn-danger my-2 my-sm-0" type="submit">
                        Buscar</button>
                    </form>
                </nav>
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
            <button type="button" class="btn btn-danger">
                Ingresos hoy <span class="badge badge-light">$ {{ $total }}</span>
            </button>
        </div>
        <br>
        @can('crear ingresos')
               {{-- exportar ingresos y egresos --}}
               <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('ingresos.export') }}">Exportar a Excel</a>
        @endcan
        <div class="text-center">
            @include('adminlte-templates::common.paginate', ['records' => $ingresos])
        </div>
    </div>
@endsection

