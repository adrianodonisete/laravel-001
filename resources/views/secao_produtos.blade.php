@extends('layout.meulayout')

@section('minha_secao_produtos')
    @if(isset($palavra))
        <b>Palavra: {{$palavra}}</b>
    @endif
@endsection