@extends('master')
@section('title', 'Vinotelia')
@section('content')

<!-- banner -->
@include('home.secciones.banners')
<!-- about -->
@include('home.secciones.about')
<!-- we do -->
@include('home.secciones.wedo')
<!-- viaje -->
@include('home.secciones.viaje')
<!--directora-->
@include('home.secciones.directora')
<!-- testimonios -->
@include('home.secciones.testimonios')
@endsection

@section('content-mov')
<!-- banner -->
@include('home.seccionesmovil.banners')
<!-- about -->
@include('home.seccionesmovil.about')
<!-- we do -->
@include('home.seccionesmovil.wedo')
<!-- viaje -->
@include('home.seccionesmovil.viaje')
<!--directora-->
@include('home.seccionesmovil.directora')
<!-- testimonios -->
@include('home.seccionesmovil.testimonios')


@endsection
