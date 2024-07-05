@if(isset($produto->id))
    <form method="post" action="{{route('produto.update',$produto)}}">
    @method('PUT')
@else
    <form method="post" action="{{route('produto.store')}}">
@endif

    @csrf

    <input type="text" name="nome" placeholder="Nome" value="{{$produto->nome ?? old('nome') }}" class="borda-preta">
    <!-- Mensagem de Erro -->
    <span class="erro">{{$errors->has('nome') ? $errors->first('nome') : ''}}</span>

    <input type="text" name="descricao" placeholder="Descrição" value="{{$produto->descricao ?? old('descricao')}}" class="borda-preta">
    <!-- Mensagem de Erro -->
    <span class="erro">{{$errors->has('descricao') ? $errors->first('descricao') : ''}}</span>

    <input type="number" name="peso" placeholder="Peso" value="{{$produto->peso ?? old('peso')}}" class="borda-preta">
    <!-- Mensagem de Erro -->
    <span class="erro">{{$errors->has('peso') ? $errors->first('peso') : ''}}</span>

    <select name="unidade_id">
        <option> -- Selecione a Unidade de Medida --</option>

        @foreach($unidades as $unidade)
            <option value="{{$unidade->id}}" {{($produto->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : ''}}>{{$unidade->descricao}}</option>
        @endforeach
    </select>
    <span class="erro">{{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}</span>

    <select name="fornecedor_id">
        <option> -- Selecione um Fornecedor --</option>

        @foreach($fornecedores as $fornecedor)
            <option value="{{$fornecedor->id}}" {{($produto->fornecedor_id ?? old('fornecedor_id')) == $fornecedor->id ? 'selected' : ''}}>{{$fornecedor->nome}}</option>
        @endforeach
    </select>
    <span class="erro">{{$errors->has('fornecedor_id') ? $errors->first('fornecedor_id') : ''}}</span>

    <button type="submit">Cadastrar</button>

</form>
