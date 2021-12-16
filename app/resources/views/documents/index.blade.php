@extends('header')
@section('conteudo')
@include('alerts')
<div class="col-md-12">
  <br>
<a href="{{ route ('documentos.create')}}"> <button type="button" class="btn btn-primary">Cadastrar documento</button> </a>
<br>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Título</th>
        <th scope="col">Tamanho</th>
        <th scope="col">Número de assinaturas</th>
        <th scope="col">Responsável pela assinatura</th>
        <th scope="col">Quantidade de páginas</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
    @foreach($documents as $document)
      <tr>
        <th scope="row">{{$document->id }} </th>
        <td>{{ $document->title }} </td>
        <td>{{$document->size }} MB</td>
        <td>{{ $document->number_signature }} </td>
        <td>{{$document->responsable_signature }}</td>
        <td>{{$document->pages_quanties }}</td>
        <td>
          <a href="{{route("documentos.show", $document->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button></a>
          <a href="{{route("documentos.edit", $document->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-edit"></i></button></a>
                <form action="{{route('documentos.destroy', $document->id)}}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                 </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>


@endsection