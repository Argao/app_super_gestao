@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <main class="conteudo-pagina">
        <section class="titulo-pagina">
            <h1>Login</h1>
        </section>

        <section class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form action="{{ route('site.login') }}" method="post">
                    @csrf
                    <input name="usuario" value="{{ old('usuario') }}" type="email" placeholder="Usuário" class="borda-preta">
                    @if($errors->has('usuario')) <span class="erro">{{$errors->first('usuario')}}</span>@endif

                    <input name="senha" value="{{ old('senha') }}" type="password" placeholder="Senha" class="borda-preta">
                    @if($errors->has('senha')) <span class="erro">{{$errors->first('senha')}}</span>@endif

                    <button type="submit" class="borda-preta">Acessar</button>
                </form>
            </div>
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
