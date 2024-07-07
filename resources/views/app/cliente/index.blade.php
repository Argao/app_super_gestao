@extends('app.layouts.basico')

@section('titulo', 'Cliente')

@section('conteudo')
    <main class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Listagem de Clientes</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%; margin: 0 auto 0 auto;">
                <table>
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->nome}}</td>

                            <td><a href="{{ route('cliente.show',$cliente)}}">Visializar</a></td>
                            <td>
                                <form id="form_{{$cliente->id}}" method="post"
                                      action="{{route('cliente.destroy',$cliente)}}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" onclick="document.getElementById('form_{{$cliente->id}}').submit()">Excluir</a>
                                </form>
                            </td>
                            <td><a href="{{route('cliente.edit',$cliente)}}">Editar</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{$clientes->appends($request)->links()}}

                <br>
                Exibindo {{$clientes->count()}} produtos de {{$clientes->total()}} (de {{$clientes->firstItem()}}
                a {{$clientes->lastItem()}})
            </div>
        </div>
    </main>
@endsection
