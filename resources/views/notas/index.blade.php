@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left" >Notas</h1>

        @can('crear notas')
            <h1 class="pull-right">
                <a class="btn btn-danger pull-right" style="margin-top: -1px;margin-bottom: 5px"
                    href="{{ route('notas.create') }}">Agregar nueva Nota</a>
            </h1>
        @endcan

    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('notas.table')
            </div>
        </div>
        <div class="text-center">
            @include('adminlte-templates::common.paginate', ['records' => $notas])
        </div>
    </div>
@endsection
