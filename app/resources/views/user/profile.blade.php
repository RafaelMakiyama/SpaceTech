
    <p> Seja bem vindo {{$user->name }} ,  {{$user->age }} anos, {{$user->profession}} na <strong> {{$user->company}} </strong>.<br> Está cursando o {{$user->course }} no módulo {{ $user->module }}</p>

<h1>Lista de documentos</h1>
@foreach($documents as $document)
    <li><strong> Título do documento:</strong> {{$document->title }}</li>
    <li><strong> Tamanho:</strong> {{$document->size }} MB </li>
    <li><strong> Quantidade de assinaturas:</strong> {{$document->numberSignatures }} </li>
    <li><strong> Responsável pelas assinatures:</strong> {{$document->responsableSignature }} </li>
    <li><strong> Quantidade de páginas nos documentos:</strong> {{$document->pagesQuanties }}</li>
    <br><br>
@endforeach