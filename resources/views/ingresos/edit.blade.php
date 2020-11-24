@extends('layouts.app')

@section('content')
@can('editar ingresos')
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
                   {!! Form::model($ingresos, ['route' => ['ingresos.update', $ingresos->id], 'method' => 'patch']) !!}

                        @include('ingresos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endcan
@endsection
