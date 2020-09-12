@extends('layouts.app')

@section('content')
@can('editar_ingresos')
    <section class="content-header">
        <h1>
            Ingresos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background1.jpg);">
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