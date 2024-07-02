@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    <main class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p> Editar Detalhes do Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="">Voltar</a> </li>

            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin: 0 auto 0 auto;">
                @component('app.produto_detalhe._components.form_create_edit',['produto_detalhe'=>$produto_detalhe,'unidades' => $unidades])
                @endcomponent
            </div>
        </div>

    </main>
@endsection
