@extends('master')
@section('title', 'Capacitacion')
@section('content')

<!-- header -->
@include('cursos.header')
<!-- cursos -->
@include('cursos.cursos')
<!-- testimonios -->
@include('home.secciones.testimonios')


@endsection

@section('content-mov')
    <!-- header -->
@include('cursos.header')
<!-- cursos -->
@include('cursos.cursos')
<!-- testimonios -->
@include('home.seccionesmovil.testimonios')

@endsection
