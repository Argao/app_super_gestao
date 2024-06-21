<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        //verifica se o usuário possui acesso à rota
        echo $metodo_autenticacao. '-' .$perfil.'<br>';
        if ($metodo_autenticacao == 'padrao'){
            echo 'Verificar o usuário e senha no banco de dados'.'<br>';
        }elseif ($metodo_autenticacao == 'ldap'){
            echo 'Verificar o usuário e senha no AD'.'<br>';
        }

        if (false){
            return $next($request);
        }

        return Response('Acesso negado! Rota exige autenticação!!!');
    }
}
