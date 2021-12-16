<div class="mb-3">
    <label for="title" class="form-label">Título</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Título" value="{{ $document->title ?? old ('title')}}">
</div>
<div class="mb-3">
    <label for="size" class="form-label">Tamanho</label>
    <input type="number" class="form-control" id="size" name="size" placeholder="Tamanho em MB" value="{{ $document->size ?? old ('size')}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Número de assinaturas</label>
    <input type="number" class="form-control" id="" name="number_signature" placeholder="Número de assinaturas" value="{{ $document->number_signature ?? old ('numbeR_signature')}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Responsável pela assinatura</label>
    <input type="text" class="form-control" id="" name="responsable_signature" placeholder="nome do responsável" value="{{ $document->responsable_signature ?? old ('responsable_signature')}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Quantidade de páginas</label>
    <input type="number" class="form-control" id="" name="pages_quanties" placeholder="Quantidade de páginas" value="{{ $document->pages_quanties ?? old ('pages_quanties')}}">
</div>