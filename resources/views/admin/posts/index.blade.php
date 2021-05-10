@extends('adminlte::page')
@section('title', 'LiveMore')


@section('content_header')
    <h1> Todos los posts </h1>
@stop

@section('content')

@livewire('admin.posts-index')
@stop

@livewireScripts
