@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Desplegable Nombre Insumos
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'desplegableNombreInsumos.store']) !!}

                        @include('desplegable_nombre_insumos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
