@extends('layouts.app')

@section('content')
@can('crear insumos')
    <section class="content-header">
        <h1>
            Insumos
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'insumos.store']) !!}

                        @include('insumos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endcan
@endsection
