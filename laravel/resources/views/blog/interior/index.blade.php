@extends('master')
@section('title', $entrada->titulo)
@section('content')

<!-- header -->
@include('blog.interior.banner')
{{-- content --}}
@include('blog.interior.content')
{{-- testimonios --}}
@include('home.secciones.testimonios')

@endsection

@section('content-mov')
    <!-- header -->
<!-- header -->
@include('blog.interior.banner')
{{-- content --}}
@include('blog.interior.content')
{{-- testimonios --}}
@include('home.secciones.testimonios')

@endsection
