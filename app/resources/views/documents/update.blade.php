@extends('header')

@section('conteudo')
@include('alerts')
<div class="col-md-12">
    <form method="POST" action="{{route('documentos.update' ,$document->id) }}">
      @csrf
      @method('PUT')
        @include('documents.form')
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection