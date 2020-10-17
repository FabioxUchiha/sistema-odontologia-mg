@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Desplegable Nombre Insumos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('desplegable_nombre_insumos.show_fields')
                    <a href="{{ route('desplegableNombreInsumos.index') }}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
