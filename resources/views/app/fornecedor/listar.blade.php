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
                <table >
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
                        @endforeach
                    </tbody>
                </table>
                {{$fornecedores->appends($request)->links()}}
            </div>
        </div>

    </main>
@endsection
