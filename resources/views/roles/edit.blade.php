@extends('layouts.app')

@section('content')
@can('editar roles')
    <section class="content-header">
        <h1>
            Rol
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background5.jpg);">
               <div class="row">
                   {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch']) !!}

                        @include('roles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
  @endcan
@endsection