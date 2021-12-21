@extends('header')

@section('conteudo')
@include('alerts')
<div class="col-md-12">
    <form method="POST" action="{{route('assinaturas.store') }}">
      @csrf
        @include('signature.form')
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection