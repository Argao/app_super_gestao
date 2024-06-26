@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    <main class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Produto - Adicionar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a> </li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin: 0 auto 0 auto;">
                <form method="post" action="{{route('produto.store')}}">
                    {{--
                    <span class="{{$msg_classe ?? ''}}">{{$msg ?? ''}}</span>
                    <input type="hidden" name="id" value="{{$fornecedor->id ?? ''}}">
                    --}}

                    @csrf
                    <!-- Mensagem de Sucesso ou Erro -->


                    <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}" class="borda-preta">
                    <!-- Mensagem de Erro -->
                    <span class="erro">{{$errors->has('nome') ? $errors->first('nome') : ''}}</span>

                    <input type="text" name="descricao" placeholder="Descrição" value="{{old('descricao')}}" class="borda-preta">
                    <!-- Mensagem de Erro -->
                    <span class="erro">{{$errors->has('descricao') ? $errors->first('descricao') : ''}}</span>

                    <input type="number" name="peso" placeholder="Peso" value="{{old('peso')}}" class="borda-preta">
                    <!-- Mensagem de Erro -->
                    <span class="erro">{{$errors->has('peso') ? $errors->first('peso') : ''}}</span>

                    <select name="unidade_id">
                        <option> -- Selecione a Unidade de Medida --</option>

                        @foreach($unidades as $unidade)
                            <option value="{{$unidade->id}}" {{old('unidade_id') == $unidade->id ? 'selected' : ''}}>{{$unidade->descricao}}</option>
                        @endforeach
                    </select>
                    <span class="erro">{{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}</span>


                    <button type="submit">Cadastrar</button>

                </form>
            </div>
        </div>

    </main>
@endsection
