@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Insumos</h1>
        <h1 class="pull-right">
            @can('crear insumos')
           <a class="btn btn-danger pull-right" style="margin-top: -1px;margin-bottom: 5px" href="{{ route('insumos.create') }}">Agregar nuevo insumo</a>
            @endcan
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('insumos.table')
            </div>
        </div>
        @can('crear insumos')
               {{-- exportar insmos --}}
               <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('insumos.export') }}">Exportar a Excel</a>
        @endcan
        <div class="text-center">
            @include('adminlte-templates::common.paginate', ['records' => $insumos])
        </div>
    </div>
@endsection

