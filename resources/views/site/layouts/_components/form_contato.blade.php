{{ $slot }}
<form action="{{route('site.contato')}}" method="post">
    @csrf
    <input type="text" placeholder="Nome" class={{$classe}} name="nome" id="nome">
    <br>
    <input type="text" placeholder="Telefone" class={{$classe}} name="telefone" id="telefone">
    <br>
    <input type="text" placeholder="E-mail" class={{$classe}} name="email" id="email">
    <br>
    <select class={{$classe}} name="motivo_contato" id="motivo_contato">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea class={{$classe}} name="mensagem" id="mensagem">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class={{$classe}}>ENVIAR</button>
</form>
