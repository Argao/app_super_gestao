@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <main class="conteudo-destaque">
        <section class="esquerda">
            <article class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.<p>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}" alt="Check">
                    <span class="texto-branco">Gestão completa e descomplicada</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}" alt="Check">
                    <span class="texto-branco">Sua empresa na nuvem</span>
                </div>
            </article>

            <aside class="video">
                <img src="{{ asset('img/player_video.jpg') }}" alt="Player de Vídeo">
            </aside>
        </section>

        <section class="direita">
            <article class="contato">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                <form>
                    <input type="text" placeholder="Nome" class="borda-branca">
                    <br>
                    <input type="text" placeholder="Telefone" class="borda-branca">
                    <br>
                    <input type="text" placeholder="E-mail" class="borda-branca">
                    <br>
                    <select class="borda-branca">
                        <option value="">Qual o motivo do contato?</option>
                        <option value="">Dúvida</option>
                        <option value="">Elogio</option>
                        <option value="">Reclamação</option>
                    </select>
                    <br>
                    <textarea class="borda-branca">Preencha aqui a sua mensagem</textarea>
                    <br>
                    <button type="submit" class="borda-branca">ENVIAR</button>
                </form>
            </article>
        </section>
    </main>
@endsection
