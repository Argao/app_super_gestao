@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
    <main class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor - Adicionar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('app.fornecedor.adicionar')}}">Novo</a> </li>
                <li><a href="{{route('app.fornecedor')}}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin: 0 auto 0 auto;">
                <form method="post" action="{{route('app.fornecedor.adicionar')}}">
                    <input type="hidden" name="id" value="{{$fornecedor->id ?? ''}}">
                    @csrf
                    <!-- Mensagem de Sucesso ou Erro -->
                    <span class="{{$msg_classe ?? ''}}">{{$msg ?? ''}}</span>

                    <input type="text" name="nome" placeholder="Nome" value="{{ $fornecedor->nome ?? old('nome')}}" class="borda-preta">
                    <!-- Mensagem de Erro -->
                    <span class="erro">{{$errors->has('nome') ? $errors->first('nome') : ''}}</span>

                    <input type="text" name="site" placeholder="Site" value="{{ $fornecedor->site ?? old('site')}}" class="borda-preta">
                    <!-- Mensagem de Erro -->
                    <span class="erro">{{$errors->has('site') ? $errors->first('site') : ''}}</span>

                    <input type="text" name="uf" placeholder="UF" value="{{$fornecedor->uf ?? old('uf')}}" class="borda-preta">
                    <!-- Mensagem de Erro -->
                    <span class="erro">{{$errors->has('uf') ? $errors->first('uf') : ''}}</span>

                    <input type="text" name="email" placeholder="E-mail" value="{{$fornecedor->email ?? old('email')}}" class="borda-preta">
                    <!-- Mensagem de Erro -->
                    <span class="erro">{{$errors->has('email') ? $errors->first('email') : ''}}</span>

                    <button type="submit">Cadastrar</button>

                </form>
            </div>
        </div>

    </main>
@endsection
