@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Inventarios</h1>
        <h1 class="pull-right">
            @can('crear inventarios')
           <a class="btn btn-danger pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('inventarios.create') }}">Agregar Nuevo Producto</a>
            @endcan
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('inventarios.table')
            </div>
        </div>
        <div class="text-center">

        </div>
        @can('crear inventarios')
               {{-- exportar inventarios --}}
               <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('inventarios.export') }}">Exportar a Excel</a>
        @endcan
        <div class="text-center">
            @include('adminlte-templates::common.paginate', ['records' => $inventarios])
        </div>
    </div>
@endsection

