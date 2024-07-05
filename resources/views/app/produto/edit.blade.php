@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    <main class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Produto - Editar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a> </li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin: 0 auto 0 auto;">
                @component('app.produto._components.form_create_edit',['produto'=>$produto,'unidades' => $unidades,'fornecedores' => $fornecedores])
                @endcomponent
            </div>
        </div>

    </main>
@endsection
