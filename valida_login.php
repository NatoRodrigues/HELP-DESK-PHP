<?php
$usuarios = array(
    array('email' => 'admin@gmail.com', 'password' => '123456'),
    array('email' => 'admin2@gmail.com', 'password' => '123456789'),
);
    $errormsg = true;

    foreach ($usuarios as $user) {
       if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']){
            $errormsg = false;
            //VARIAVEL DE ERRO COM VALOR FALSO = USUARIO AUTENTICADO
       }
    }

    if ($errormsg == false) {
        header('Location: home.php');
    } else {
        header('Location: index.php?login=erro');
    }
?>