@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    <h1>PRIMER PARCIAL - PROGRAMACION III</h1>
    <h2>Esta es la pagina 1</h2>
    <p>Bryan Martinez 0909-20-6903.</p>
@endsection

@section('content')
    <a href="{{route('lista-alumnos')}}">Volver al inicio</a>
@endsection
