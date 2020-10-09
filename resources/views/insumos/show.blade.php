@extends('layouts.app')

@section('content')
@can('ver insumos')
    <section class="content-header">
        <h1>
            Insumos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('insumos.show_fields')
                    <a href="{{ route('insumos.index') }}" class="btn btn-default">volver</a>
                </div>
            </div>
        </div>
    </div>
@endcan
@endsection
