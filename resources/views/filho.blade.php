@extends('layout.app')

@section('titulo', 'Minha Página - Filho')

@section('barralateral')
    @parent
    <br />
    <b>essa parte do codigo é do filho</b>
@endsection

@section('conteudo')
    <p>Conteúdo do filho</p>
@endsection