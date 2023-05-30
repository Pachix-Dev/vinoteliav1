@extends('master')
@section('title', 'Claves para comprar vino por internet')
@section('content')

<!-- header -->
@include('blog.blog1.secciones.banners')
{{-- content --}}
@include('blog.blog1.secciones.content')
{{-- testimonios --}}
@include('home.secciones.testimonios')

@endsection

@section('content-mov')
    <!-- header -->
@include('blog.blog1.seccionesmovil.banners')
<!-- cursos -->
@include('blog.blog1.seccionesmovil.content')
<!-- testimonios -->
@include('home.seccionesmovil.testimonios')

@endsection
