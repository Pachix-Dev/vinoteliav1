@extends('master')
@section('title', $curso->nombre)
@section('content')

<!-- banner -->
@include('cursos.secciones.banner')
<!-- razones/beneficios -->
@include('cursos.secciones.beneficios')
<!-- directora -->
@include('cursos.secciones.directora')
<!-- participar -->
@include('cursos.secciones.participar')
<!-- formas de pago -->
@include('cursos.secciones.ventas')
<!-- testimonios -->
@include('home.secciones.testimonios')



@endsection
