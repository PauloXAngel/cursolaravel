@extends('site.layout')
@section('title', 'Essa é a página HOME')


@section('conteudo')

{{-- Estrutura de controle --}}
{{--isset($nome) ? 'existe' : 'não existe' --}}

{{ $teste ?? 'padrão' }}

@endsection
