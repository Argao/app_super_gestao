
@if(isset($cliente->id)) <form method="post" action="{{route('cliente.update',$cliente)}}">@method('PUT')

@else<form method="post" action="{{route('cliente.store')}}">@endif

    @csrf

    <input type="text" name="nome" placeholder="Nome" value="{{$cliente->nome ?? old('nome') }}"
           class="borda-preta">
    <!-- Mensagem de Erro -->
    <span class="erro">{{$errors->has('nome') ? $errors->first('nome') : ''}}</span>



    <button type="submit">Cadastrar</button>

    </form>
