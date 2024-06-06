<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - Sobre Nós</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css')}}">
    </head>

    <body>
        <header class="topo">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo da empresa">
            </div>

            <nav class="menu">
                <ul>
                    <li><a href="{{ route('site.index') }}">Principal</a></li>
                    <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
                    <li><a href="{{ route('site.contato') }}">Contato</a></li>
                </ul>
            </nav>
        </header>

        <main class="conteudo-pagina">
            <section class="titulo-pagina">
                <h1>Olá, eu sou o Super Gestão</h1>
            </section>

            <section class="informacao-pagina">
                <p>O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar os negócios da sua empresa.</p>
                <p>Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
            </section>
        </main>

        <footer class="rodape">
            <section class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="{{ asset('img/facebook.png') }}" alt="Ícone do Facebook">
                <img src="{{ asset('img/linkedin.png') }}" alt="Ícone do LinkedIn">
                <img src="{{ asset('img/youtube.png') }}" alt="Ícone do YouTube">
            </section>
            <section class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </section>
            <section class="localizacao">
                <h2>Localização</h2>
                <img src="{{ asset('img/mapa.png') }}" alt="Mapa de localização">
            </section>
        </footer>
    </body>
</html>
