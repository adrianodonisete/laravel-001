@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/produtos/{{$prod->id}}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nomeProduto">Nome do Produto</label>
                <input type="text" class="form-control" name="nomeProduto" 
                       id="nomeProduto" placeholder="Produto"
                       value="{{$prod->nome}}">
            </div>

            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="text" class="form-control" name="preco" 
                       id="preco" placeholder="Preço"
                       value="{{$prod->preco}}">
            </div>

            <div class="form-group">
                <label for="estoque">Estoque</label>
                <input type="text" class="form-control" name="estoque" 
                       id="estoque" placeholder="Estoque"
                       value="{{$prod->estoque}}">
            </div>

            <div class="form-group">
                <label for="categoria_id">Categoria</label>
                <select class="form-control" name="categoria_id" id="categoria_id">
                @foreach($cats as $cat)
                    <option value="{{$cat->id}}"
                        @if($prod->categoria_id == $cat->id)
                            selected
                        @endif
                        >{{$cat->nome}}</option>
                @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection