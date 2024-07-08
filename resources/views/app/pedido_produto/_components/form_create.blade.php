<form method="post" action="{{route('pedido-produto.store',['pedido'=>$pedido])}}">
    @csrf

    <select name="produto_id">
        <option> -- Selecione um produto --</option>

        @foreach($produtos as $produto)
            <option value="{{$produto->id}}" {{(old('produto_id')) == $produto->id ? 'selected' : ''}}>{{$produto->nome}}</option>
        @endforeach
    </select>
    <span class="erro">{{$errors->has('produto_id') ? $errors->first('produto_id') : ''}}</span>

    <input type="number" name="quantidade" value="{{old('quantidade') ?? ''}}" placeholder="Quantidade" class="borda-preta">
    <span class="erro">{{$errors->has('quantidade') ? $errors->first('quantidade') : ''}}</span>

    <button type="submit">Cadastrar</button>
</form>
