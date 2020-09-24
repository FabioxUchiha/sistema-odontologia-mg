@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Desplegable Nombre Inventario
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('desplegable_nombre_inventarios.show_fields')
                    <a href="{{ route('desplegableNombreInventarios.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
