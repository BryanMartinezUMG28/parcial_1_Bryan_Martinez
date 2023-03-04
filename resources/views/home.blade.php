@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <h1>PRIMER PARCIAL - PROGRAMACIO III</h1>
    <p>Bryan Martinez 0909-20-6903.</p>
@endsection

@section('content')
    <h1>PRIMER PARCIAL - PROGRAMACIO III</h1>
    <p>Mi nombre es: Bryan Martinez Carné: 0909-20-6903</p>
    <a href="{{route('pagina1')}}"> Ir a pagina 1</a>
    <a href="{{route('pagina2')}}"> Ir a pagina 2</a>
@endsection
