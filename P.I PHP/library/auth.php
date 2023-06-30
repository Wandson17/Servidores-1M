<?php

function authenticate()
{ //verifica se esta logado
    if (!(isset($_SESSION['user']))) {
        render('/errors/notauthenticate.php');
        die();
    }
}


function authUser()
{ //puxa todos os dados do usuário logado
    $user = new User(connection());
    
    return $dados = $user->find("SELECT * FROM users WHERE id = ".$_SESSION['user']."" );
}

