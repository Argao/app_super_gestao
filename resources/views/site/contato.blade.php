@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <main class="conteudo-pagina">
        <section class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </section>

        <section class="informacao-pagina">
            <article class="contato-principal">
                <form>
                    <input type="text" placeholder="Nome" class="borda-preta">
                    <br>
                    <input type="text" placeholder="Telefone" class="borda-preta">
                    <br>
                    <input type="text" placeholder="E-mail" class="borda-preta">
                    <br>
                    <select class="borda-preta">
                        <option value="">Qual o motivo do contato?</option>
                        <option value="">Dúvida</option>
                        <option value="">Elogio</option>
                        <option value="">Reclamação</option>
                    </select>
                    <br>
                    <textarea class="borda-preta">Preencha aqui a sua mensagem</textarea>
                    <br>
                    <button type="submit" class="borda-preta">ENVIAR</button>
                </form>
            </article>
        </section>
    </main>

    <footer class="rodape">
        <section class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}" alt="Facebook">
            <img src="{{ asset('img/linkedin.png') }}" alt="LinkedIn">
            <img src="{{ asset('img/youtube.png') }}" alt="YouTube">
        </section>
        <section class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </section>
        <section class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}" alt="Mapa">
        </section>
    </footer>

@endsection
