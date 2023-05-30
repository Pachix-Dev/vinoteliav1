@extends('master')
@section('title', 'Vinotelia')
@section('content')

<!-- banner -->
@include('home.secciones.banners')
{{-- lista de productos --}}
@include('carrito.secciones.productos')
<!-- testimonios -->
@include('home.secciones.testimonios')
@endsection

@section('content-mov')

<!-- testimonios -->
@include('home.seccionesmovil.testimonios')


@endsection
