@extends('layouts.app')

@section('content')
@can('crear ingresos')
    <section class="content-header">
        <h1>
            Ingresos y Egresos
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body" style="background-image: url();">
                <div class="row">
                    {!! Form::open(['route' => 'ingresos.store']) !!}

                        @include('ingresos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endcan
@endsection
