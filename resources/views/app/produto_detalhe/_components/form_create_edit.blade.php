@if(isset($produto_detalhe->id))
    <form method="post" action="{{route('produto-detalhe.update',$produto_detalhe)}}">
        @method('PUT')
@else
    <form method="post" action="{{route('produto-detalhe.store')}}">
@endif

    @csrf

    <input type="text" name="produto_id" placeholder="ID do Produto" value="{{$produto_detalhe->produto_id ?? old('produto_id') }}"
           class="borda-preta">
    <!-- Mensagem de Erro -->
    <span class="erro">{{$errors->has('produto_id') ? $errors->first('produto_id') : ''}}</span>

    <input type="number" name="comprimento" placeholder="Comprimento"
           value="{{$produto_detalhe->comprimento ?? old('comprimento')}}" class="borda-preta">
    <!-- Mensagem de Erro -->
    <span class="erro">{{$errors->has('comprimento') ? $errors->first('comprimento') : ''}}</span>

    <input type="number" name="largura" placeholder="Largura" value="{{$produto_detalhe->largura ?? old('largura')}}"
           class="borda-preta">
    <!-- Mensagem de Erro -->
    <span class="erro">{{$errors->has('largura') ? $errors->first('largura') : ''}}</span>

    <input type="number" name="altura" placeholder="Altura" value="{{$produto_detalhe->altura ?? old('altura')}}"
           class="borda-preta">
    <!-- Mensagem de Erro -->
    <span class="erro">{{$errors->has('altura') ? $errors->first('altura') : ''}}</span>

    <select name="unidade_id">
        <option> -- Selecione a Unidade de Medida --</option>

        @foreach($unidades as $unidade)
            <option
                value="{{$unidade->id}}" {{($produto_detalhe->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : ''}}>{{$unidade->descricao}}</option>
        @endforeach
    </select>
    <span class="erro">{{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}</span>


    <button type="submit">Cadastrar</button>

</form>
