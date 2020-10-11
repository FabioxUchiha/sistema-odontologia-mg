@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Desplegable Marca Instrumental
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'desplegableMarcaInstrumentals.store']) !!}

                        @include('desplegable_marca_instrumentals.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
