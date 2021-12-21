<div class="mb-3">
    <label for="title" class="form-label">Quantidade de caracter</label>
    <input type="number" class="form-control" id="quanties_character" name="quanties_character" placeholder="Quantidade de caracteres" value="{{ $signature->quanties_character ?? old ('quanties_character')}}">
</div>
<div class="mb-3">
    <label for="size" class="form-label">Assinatura</label>
    <input type="text" class="form-control" id="signature" name="signature" placeholder="Responsável pela assinatura" value="{{ $signature->signature ?? old ('signature')}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Número de uso assinaturas</label>
    <input type="number" class="form-control" id="" name="number_uses" placeholder="Número de assinaturas" value="{{ $signature->number_uses ?? old ('number_uses')}}">
</div>