@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Usuarios</h1>
        <h1 class="pull-right">
            @can('crear usuarios')
                <a class="btn btn-danger pull-right" style="margin-top: -1px;margin-bottom: 5px"
                    href="{{ route('users.create') }}">Agregar Nuevo Usuario</a>
            @endcan

        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('users.table')
            </div>
        </div>
        <div class="text-center">
            @include('adminlte-templates::common.paginate', ['records' => $users])
        </div>
    </div>
@endsection
