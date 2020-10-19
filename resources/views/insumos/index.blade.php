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
                <nav class="">
                    <form class="form-inline">
                        <input
                        class="form-control mr-sm-2 shadow"
                        name="buscarpor" type="search" placeholder="Buscar por nombre">
                        <input
                        class="form-control mr-sm-2 shadow"
                        name="buscarpormarca" type="search" placeholder="Buscar por marca">
                        <button class="btn btn-danger my-2 my-sm-0" type="submit">
                        Buscar</button>
                    </form>
                </nav>
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

