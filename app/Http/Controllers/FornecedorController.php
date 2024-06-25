<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('app.fornecedor.index');
    }

    public function listar(Request $request)
    {
        $fornecedores = Fornecedor::where('nome', 'like', '%'.$request->input('nome').'%')
            ->where('site', 'like', '%'.$request->input('nome').'%')
            ->where('uf', 'like', '%'.$request->input('uf').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
            ->paginate(2);
        return view('app.fornecedor.listar',['fornecedores' => $fornecedores, 'request' => $request->all()]);
    }
    public function adicionar(Request $request)
    {
        $msg = ['msg'=>'','classe'=>''];

        if($request->input('_token') != '' && $request->input('id') == '')
        {
            //cadastro
            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email',
            ];

            $feedback =[
                'required' => 'O campo :attribute deve ser preenchido',
                'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
                'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
                'uf.min' => 'O campo uf deve ter no mínimo 2 caracteres',
                'uf.max' => 'O uf nome deve ter no máximo 2 caracteres',
                'email.email' => 'O campo e-mail não foi preenchido corretamente'
            ];

            $request->validate($regras,$feedback);

            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());

           //redirect

            //dados view
            $msg['msg'] = 'Cadastro realizado com sucesso!';
            $msg['classe'] = 'msg-successes';
        }elseif ($request->input('_token') != '' && $request->input('id') != '') {
            //edição
            $fornecedor = Fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());

            if ($update){
                $msg['msg'] = 'Fornecedor alterado com sucesso!';
                $msg['classe'] = 'msg-successes';

            }else{
                $msg['msg'] = 'Erro ao tentar atualizar o registro';
                $msg['classe'] = 'msg-erro';
            }
            return redirect()->route('app.fornecedor.editar', ['id' => $request->input('id'), 'msg' =>$msg['msg'],'msg_classe' =>$msg['classe']]);
        }

        return view('app.fornecedor.adicionar', ['msg' =>$msg['msg'],'msg_classe' =>$msg['classe']]);
    }

    public function editar($id, $msg = '', $msg_classe = '')
    {
        $fornecedor = Fornecedor::find($id);
        return view('app.fornecedor.adicionar',['fornecedor' => $fornecedor, 'msg' =>$msg,'msg_classe' =>$msg_classe]);
    }

    public function excluir($id)
    {
        Fornecedor::find($id)->delete();

        return redirect()->route('app.fornecedor');
    }
}
