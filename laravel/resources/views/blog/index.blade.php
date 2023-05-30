@extends('master')
@section('title', (isset($blogTitle) ? $blogTitle : 'Blog'))
@section('content')

<!-- header -->
@include('blog.secciones.banner')
<!-- contendio -->
@include('blog.secciones.content')
<!-- testimonios -->
@include('home.secciones.testimonios')

@endsection

@section('content-mov')
    <!-- header -->
    @include('blog.secciones.banner')
    <!-- contendio -->
    @include('blog.secciones.content')
    <!-- testimonios -->
    @include('home.secciones.testimonios')

@endsection

