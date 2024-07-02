@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    <main class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Produto - Listar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin: 0 auto 0 auto;">
                <table>
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Peso</th>
                        <th>Unidade ID</th>
                        <th>Comprimento</th>
                        <th>Altura</th>
                        <th>Largura</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($produtos as $produto)
                        <tr>
                            <td>{{$produto->nome}}</td>
                            <td>{{$produto->descricao}}</td>
                            <td>{{$produto->peso}}</td>
                            <td>{{$produto->unidade_id}}</td>
                            <td>{{$produto->comprimento ?? ''}}</td>
                            <td>{{$produto->altura ?? ''}}</td>
                            <td>{{$produto->largura ?? ''}}</td>
                            <td><a href="{{ route('produto.show',$produto)}}">Visializar</a></td>
                            <td>
                                <form id="form_{{$produto->id}}" method="post" action="{{route('produto.destroy',$produto)}}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" onclick="document.getElementById('form_{{$produto->id}}').submit()">Excluir</a>
                                </form>
                            </td>
                            <td><a href="{{route('produto.edit',$produto)}}">Editar</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{$produtos->appends($request)->links()}}

                <br>
                Exibindo {{$produtos->count()}} produtos de {{$produtos->total()}} (de {{$produtos->firstItem()}}
                a {{$produtos->lastItem()}})
            </div>
        </div>
    </main>
@endsection
