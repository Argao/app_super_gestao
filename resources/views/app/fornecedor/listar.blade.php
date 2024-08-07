@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
    <main class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor - Listar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('app.fornecedor.adicionar')}}">Novo</a> </li>
                <li><a href="{{route('app.fornecedor')}}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin: 0 auto 0 auto;">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Site</th>
                            <th>UF</th>
                            <th>E-mail</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fornecedores as $fornecedor)
                            <tr>
                                <td>{{$fornecedor->nome}}</td>
                                <td>{{$fornecedor->site}}</td>
                                <td>{{$fornecedor->uf}}</td>
                                <td>{{$fornecedor->email}}</td>
                                <td><a href="{{route('app.fornecedor.excluir',$fornecedor->id)}}">Excluir</a></td>
                                <td><a href="{{route('app.fornecedor.editar', $fornecedor->id)}}">Editar</a></td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <p>Lista de produtos</p>
                                    <table style=" width: auto; margin: 20px auto 20px auto">
                                        <thead>
                                        <tr>
                                            <td>ID</td>
                                            <td>Nome</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($fornecedor->produtos as $key => $produto)
                                                <tr>
                                                    <td>{{$produto->id}}</td>
                                                    <td>{{$produto->nome}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{$fornecedores->appends($request)->links()}}
                {{--
                <br>
                {{$fornecedores->count()}} - Total de registros por página
                <br>
                {{$fornecedores->total()}} - Total de registros por consulta
                <br>
                {{$fornecedores->firstItem()}} - Numero do primeiro registro da página
                <br>
                {{$fornecedores->lastItem()}} -Número do último registro da página
                --}}
                <br>
                Exibindo {{$fornecedores->count()}} fornecedores de {{$fornecedores->total()}} (de {{$fornecedores->firstItem()}} a {{$fornecedores->lastItem()}})
            </div>
        </div>
    </main>
@endsection
