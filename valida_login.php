<?php

session_start();
$_SESSION['x'] = 'sessão iniciada';
print_r($_SESSION);
echo '<hr/>';
print_r($_SESSION['y']);


//VARIAVEL QUE VERIFICA SE A AUTENTICAÇÃO FOI REALIZADA
$usuario_autenticado = false;

//USUARIOS DO SISTEMA
$usuarios_app = array(
    array('email' => 'adm@gmail.com.br', 'password' => '123456'),
    array('email' => 'user@gmail.com.br', 'password' => 'abcd')
);

foreach($usuarios_app as $user){
    if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']){
        $usuario_autenticado = true;
    }
}

    if($usuario_autenticado){
        echo 'Usuário autenticado.';

        $_SESSION['autenticado'] = 'SIM';
    }else{  
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');
      }
?>
