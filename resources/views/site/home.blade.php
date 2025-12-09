@extends('site.layout')
@section('title', 'Essa é a página HOME')
@section('conteudo')

{{-- Estrutura de controle --}}

@for ($i = 0; $i <=10; $i++)
    <p>O valor de i é: {{ $i }} <br>
@endfor

@endsection

// mt sono, parei no while 

