<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index(Request $request)
    {
        $erro = '';

        switch ($request->get('erro'))
        {
            case 1:
                $erro = 'Usuário e ou senha não existe';
                break;
            case 2:
                $erro = 'Necessário realizar login para ter acesso a página';
                break;
        }

        return view('site.login',['titulo' => 'Login', 'erro' => $erro]);
    }

    public function autenticar(Request $request)
    {
        session_start();
        //regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        //mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($regras,$feedback);

        //recuperamos os parâmetros do formulário
        $email = $request->get('usuario');
        $password = $request->get('senha');

        echo "Usuário: $email | Senha: $password <br>";

        //iniciar Model User
        $user = new User();

        $usuario = $user->where('email',$email)->where('password',$password)->get()->first();

        if(isset($usuario->name)){

            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.home');
        }else{
            return redirect()->route('site.login',['erro' => 1]);
        }

    }

    public function sair()
    {
        session_destroy();
        return redirect()->route('site.index');
    }
}
