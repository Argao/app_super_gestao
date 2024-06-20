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
                @component('site.layouts._components.form_contato',['classe'=> 'borda-branca','motivo_contatos' => $motivo_contatos])
                    <h3>Teste</h3>
                @endcomponent
            </article>
        </section>
    </main>
@endsection
