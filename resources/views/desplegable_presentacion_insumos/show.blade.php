@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Desplegable Presentacion Insumos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('desplegable_presentacion_insumos.show_fields')
                    <a href="{{ route('desplegablePresentacionInsumos.index') }}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
