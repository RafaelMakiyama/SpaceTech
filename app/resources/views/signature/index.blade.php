@extends('header')
@section('conteudo')
@include('alerts')
<div class="col-md-12">
  <br>
<a href="{{ route ('assinaturas.create')}}"> <button type="button" class="btn btn-primary">Cadastrar assinatura</button> </a>
<br>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Quantidade de caracter</th>
        <th scope="col">assinatura</th>
        <th scope="col">Número de uso da assinatura</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
    @foreach($signatures as $signature)
      <tr>
        <th scope="row">{{$signature->id }} </th>
        <td>{{ $signature->quanties_character }} </td>
        <td>{{ $signature->signature }} MB</td>
        <td>{{ $signature->number_uses }} </td>
        <td>
          <a href="{{route("assinaturas.show", $signature->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button></a>
          <a href="{{route("assinaturas.edit", $signature->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-edit"></i></button></a>
                <form action="{{route('assinaturas.destroy', $signature->id)}}" method="post">
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