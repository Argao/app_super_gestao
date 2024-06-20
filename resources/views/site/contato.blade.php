@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <main class="conteudo-pagina">
        <section class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </section>

        <section class="informacao-pagina">
            <article class="contato-principal">
                <div class="contato-principal">
                    @component('site.layouts._components.form_contato',['classe'=> 'borda-preta' , 'motivo_contatos' => $motivo_contatos])
                        <p>A nossa equipe analisará a sua mensagem e retornaremos o mais brevemente possível</p>
                        <p>Nosso tempo médio de resposta é de 48h</p>
                    @endcomponent
                </div>
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
