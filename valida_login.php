<?php
$usuarios = array(
    array('email' => 'admin@gmail.com', 'password' => '123456'),
    array('email' => 'admin2@gmail.com', 'password' => '123456789'),
);
    $error_autentica = true;

    foreach ($usuarios as $user) {
       if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']){
            $erro_autentica = false;
            //VARIAVEL DE ERRO COM VALOR FALSO = USUARIO AUTENTICADO
       }
    }

    if ($erro_autentica == false) {
        header('Location: home.php');
    } else {
        header('Location: index.php?login=erro');
    }
?>