@extends('master')
@section('title', 'Aviso de privacidad')
@section('content')

{{-- contenido --}}
@include('aviso.secciones.contenido')
<!-- testimonios -->
@include('home.secciones.testimonios')

@endsection

@section('content-mov')

{{-- contenido --}}
@include('aviso.secciones.contenido')
<!-- testimonios -->
@include('home.secciones.testimonios')


@endsection
