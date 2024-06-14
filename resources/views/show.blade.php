@extends('layout')

@section('title','Servicio | ' . $servicio->titulo)
@section('content')
<tr>
    <td colspan="4">{{$servicio->titulo}}
</tr>
<tr>
    <td colspan="4">{{$servicio->descripcion}}
</tr>
<tr>
    <td colspan="4">{{$servicio->created_at->diffForHumans()}}
</tr>
@endsection
