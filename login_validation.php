<?php
    //Session start (must come before print any result in the screen)
    session_start();

    //Return values inserted
    /*
    print_r($_POST);
    echo '</br>';
    echo $_POST['log_user_email'];
    echo '</br>';
    echo $_POST['log_user_pass'];
    */

    //Variable to control autentication
    $user_autenticate=false;

   //Hardcode user credencial entry, ignore if you gonna use database
    $user_app=array(
        array('log_user_email' => 'h1@sapo.pt', 'log_user_pass' => '12345'),
        array('log_user_email' => 'h2@sapo.pt', 'log_user_pass' => '12345'),
        array('log_user_email' => 'h3@sapo.pt', 'log_user_pass' => '12345'),
    );

    //Imprimir array
    /*
    echo '<pre>';
    print_r($user_app);
    echo '</pre>';
    */

    /*
    //Array print 2 forms
    foreach($user_app as $user_credencial){
        print_r($user_credencial);
        echo'</br>';
        echo 'User:'.$user_credencial['log_user_email'].' | '. $user_credencial['log_user_pass'];
        echo'<br />';
        echo 'User form: '.$_POST['log_user_email'].' | '.$_POST['log_user_pass'];
        echo '<hr>';
    }
    */

    //Autentication check
    foreach($user_app as $user_credencial){
        if($user_credencial['log_user_email']==$_POST['log_user_email'] && $user_credencial['log_user_pass']==$_POST['log_user_pass']) {
            $user_autenticate = true;
        }
    }

    //Autentication validation
    if($user_autenticate) {
        $_SESSION['autentication'] = 'true';
        header('Location: client_home.php');
    }else{
        $_SESSION['autentication'] = 'false';
        header('Location: login_input.php?login=error_log');
    }
?>