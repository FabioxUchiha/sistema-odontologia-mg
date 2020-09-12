@extends('layouts.app')

@section('content')
@can('editar_insumos')
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
                   {!! Form::model($insumos, ['route' => ['insumos.update', $insumos->id], 'method' => 'patch']) !!}

                        @include('insumos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endcan
@endsection