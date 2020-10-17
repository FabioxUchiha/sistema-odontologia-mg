@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Desplegable Nombre Insumos</h1>
        <h1 class="pull-right">
           <a class="btn btn-danger pull-right" style="margin-top: -1px;margin-bottom: 5px" href="{{ route('desplegableNombreInsumos.create') }}">Agregar nuevo</a>
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
                        <button class="btn btn-danger my-2 my-sm-0" type="submit">
                        Buscar</button>
                    </form>
                </nav>
                    @include('desplegable_nombre_insumos.table')
            </div>
        </div>
        <div class="text-center">

        @include('adminlte-templates::common.paginate', ['records' => $desplegableNombreInsumos])

        </div>
    </div>
@endsection

