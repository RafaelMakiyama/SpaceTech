@extends('header')

@section('conteudo')
@include('alerts')
<div class="col-md-12">
    <form method="POST" action="{{route('documentos.store') }}">
      @csrf
        @include('documents.form')
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection