@extends('header')

@section('conteudo')
@include('alerts')
<div class="col-md-12">
    <form method="POST" action="{{route('assinaturas.update' ,$signature->id) }}">
      @csrf
      @method('PUT')
        @include('signature.form')
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection