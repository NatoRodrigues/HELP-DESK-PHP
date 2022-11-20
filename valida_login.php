<?php
    $errormsg = false;
    if (!isset($_POST) || empty($_POST))
    {
        $errormsg = 'Preencha os campos';
    }

    foreach ($_POST as $key => $value) {
        // REMOVER TAGS HTML
        // REMOVE ESPAÇOS EM BRANCO DO $VALUE
        $$key = trim(strip_tags($value));

        //AGORA VERIFICA SE ALGUM CAMPO ESTÁ NULL
    }
    if (empty($value)) {
        $errormsg = 'Existem campos em branco';
        echo "$errormsg";
    }

    // ----------------- EMAIL ------------------ //

    //VERIFICA SE O EMAIL EXISTE E SE É DE FATO UM EMAIL

    if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) && !$errormsg) {
        $errormsg = 'Digite um email válido';
    }
    header("location:home.php");
?>