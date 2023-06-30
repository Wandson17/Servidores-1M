<?php

class authController{

    function login()
    {
        render('/auth/login.php');
    }

    function register()
    {
        render('/auth/register.php');
    }

    function logout()
    {
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            session_destroy();
            setcookie("PHPSESSID",null,strtotime("-36000 seconds"));

            redirect('/');
        }else{
            redirect('/');
        }
    }

    function logar()
    {
        $user = new User(connection());
        $dados = $user->find("SELECT * FROM users WHERE email LIKE '%" . $_POST['email'] . "%'");

        if(isset($dados)){//verifica se o usuário foi encontrado

            if(password_verify($_POST['password'],$dados['password'])){//verificando senha

                $_SESSION['user']=$dados['id'];

                return redirect('/dash');

            }else{
                return redirect('/login');
            }

        }else{
            return redirect('/login');
        }
        
    }
        
    function registrar()
    {
        $user = new User(connection());
        $user->save();

        redirect('/login');
    }
}