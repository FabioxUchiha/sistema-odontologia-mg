@extends('layouts.app')
@section('content')
<style>
#suma{display:none;}
</style>
<div id="suma">
@foreach($ingresos->all() as $ingreso)
	{{ $total += $ingreso->precio }}
@endforeach
</div>
<button class="btn btn-warning">
	ingresos del mes
	{{ $total }}
</button>
@endsection
