@if(isset($pedido->id))
    <form method="post" action="{{route('pedido.update',$pedido)}}">
        @method('PUT')
@else<form method="post" action="{{route('pedido.store')}}">@endif


    @csrf


    <select name="cliente_id">
        <option> -- Selecione um Cliente --</option>

        @foreach($clientes as $cliente)
            <option value="{{$cliente->id}}" {{($pedido->cliente_id ?? old('cliente_id')) == $cliente->id ? 'selected' : ''}}>{{$cliente->nome}}</option>
        @endforeach
    </select>
    <span class="erro">{{$errors->has('cliente_id') ? $errors->first('cliente_id') : ''}}</span>


    <button type="submit">Cadastrar</button>

</form>
