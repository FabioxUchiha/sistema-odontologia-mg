@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Ingresos</h1>
        <h1 class="pull-right">
            @can('ver_inventarios')
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
        <div class="text-center">

        </div>
    </div>
@endsection

