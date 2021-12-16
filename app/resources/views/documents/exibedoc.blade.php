@extends('header')
@section('conteudo')
<div class="col-md-12">
    <h6> Documento:{{ $document->title }} </h6>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Tamanho</th>
            <th scope="col">Número de assinaturas</th>
            <th scope="col">Responsável pela assinatura</th>
            <th scope="col">Quantidade de páginas</th>
            <th>Página anterior</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$document->id }} </th>
            <td>{{ $document->title }} </td>
            <td>{{ $document->size }} MB</td>
            <td>{{ $document->number_signature }} </td>
            <td>{{ $document->responsable_signature }}</td>
            <td>{{ $document->pages_quanties }}</td>
            <td><a href="{{route('documentos.index')}}">Voltar a listagem</a> 
        </tr>
        </tbody>
    </table>
</div>
@endsection