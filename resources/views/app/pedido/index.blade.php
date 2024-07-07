@extends('app.layouts.basico')

@section('titulo', 'Pedido')

@section('conteudo')
    <main class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Listagem de Clientes</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin: 0 auto 0 auto;">
                <table>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($pedidos as $pedido)
                            <tr>
                                <td>{{$pedido->id}}</td>
                                <td>{{$pedido->cliente_id}}</td>
                                <td><a href="{{route('pedido-produto.create',['pedido'=> $pedido->id])}}">Adicionar Produtos</a> </td>
                                <td><a href="{{ route('pedido.show',$pedido)}}">Visializar</a></td>
                                <td>
                                    <form id="form_{{$pedido->id}}" method="post"
                                          action="{{route('pedido.destroy',$pedido)}}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" onclick="document.getElementById('form_{{$pedido->id}}').submit()">Excluir</a>
                                    </form>
                                </td>
                                <td><a href="{{route('pedido.edit',$pedido)}}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{$pedidos->appends($request)->links()}}

                <br>
                Exibindo {{$pedidos->count()}} produtos de {{$pedidos->total()}} (de {{$pedidos->firstItem()}}
                a {{$pedidos->lastItem()}})
            </div>
        </div>
    </main>
@endsection
