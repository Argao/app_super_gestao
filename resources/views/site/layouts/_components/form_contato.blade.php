{{ $slot }}
<form action="{{route('site.contato')}}" method="post">
    @csrf
    <input type="text" placeholder="Nome" value="{{ old('nome') }}" class={{$classe}} name="nome" id="nome">
    <br>
    <input type="text" placeholder="Telefone" value="{{ old('telefone') }}" class={{$classe}} name="telefone" id="telefone">
    <br>
    <input type="text" placeholder="E-mail" value="{{ old('email') }}" class={{$classe}} name="email" id="email">
    <br>

    <select class={{$classe}} name="motivo_contatos_id" id="motivo_contato">
        <option value="">Qual o motivo do contato?</option>

        @foreach($motivo_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}> {{$motivo_contato->motivo_contato}}</option>
        @endforeach

    </select>
    <br>
    <textarea class={{$classe}} name="mensagem" id="mensagem">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem'}}
    </textarea>
    <br>
    <button type="submit" class={{$classe}}>ENVIAR</button>
</form>
<div style="position: absolute; top: 0; left: 0; width: 100%; background: red">
    <pre>{{ print_r($errors) }}</pre>
</div>

