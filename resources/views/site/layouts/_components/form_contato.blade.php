{{ $slot }}
<form action="{{route('site.contato')}}" method="post">
    @csrf

    <input type="text" placeholder="Nome" value="{{ old('nome') }}" class={{$classe}} name="nome" id="nome">
    @if($errors->has('nome')) <p class="erro">{{$errors->first('nome')}}</p> @else <br> @endif

    <input type="text" placeholder="Telefone" value="{{ old('telefone') }}" class={{$classe}} name="telefone" id="telefone">
    @if($errors->has('telefone')) <p class="erro">{{$errors->first('telefone')}}</p> @else <br> @endif

    <input type="text" placeholder="E-mail" value="{{ old('email') }}" class={{$classe}} name="email" id="email">
    @if($errors->has('email')) <p class="erro">{{$errors->first('email')}}</p> @else <br> @endif

    <select class={{$classe}} name="motivo_contatos_id" id="motivo_contato">
        <option value="">Qual o motivo do contato?</option>

        @foreach($motivo_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}> {{$motivo_contato->motivo_contato}}</option>
        @endforeach
    </select>
    @if($errors->has('motivo_contatos_id')) <p class="erro">{{$errors->first('motivo_contatos_id')}}</p> @else <br> @endif

    <textarea class={{$classe}} name="mensagem" id="mensagem">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem'}}</textarea>
    @if($errors->has('mensagem')) <p class="erro">{{$errors->first('mensagem')}}</p> @else <br> @endif

    <button type="submit" class={{$classe}}>ENVIAR</button>
</form>


