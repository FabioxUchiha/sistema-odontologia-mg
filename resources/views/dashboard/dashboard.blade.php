@extends('layouts.app')
@section('content')

@foreach($ingresos->all() as $ingreso)
<button class="btn btn-warning">
	{{ $ingreso->precio }}
</button>
@endforeach
@endsection
