@extends('layouts.app')

@section('content')
@can('ver_ingresos')
    <section class="content-header">
        <h1>
            Ingresos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ingresos.show_fields')
                    <a href="{{ route('ingresos.index') }}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endcan
@endsection
