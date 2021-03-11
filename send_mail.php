<?php
    //Check values inserted on form
    /*
    print_r($_POST);
    */

    //Setup variables
    $newsletter_email = $_POST['newsletter_email'];
    $newsletter_user = $_POST['newsletter_user'];
    $subject = 'Confirmação de subscrição da newsletter da organização X';
    $message = 'Caro usuário '.$newsletter_user.',confirmamos que subscreveu a nossa Newsletter. Obrigado pela preferência!';

    //Menssage of confirmation
    if (mail ($newsletter_email, $subject, $message)){
        mail ($newsletter_email, $subject, $message);
        echo '<strong>Caro usuário '.$newsletter_user.', a sua subscrição foi aceite com sucesso. Obrigado!<strong><hr>';
        echo '<a href="./">Voltar ao inicio</a>';


    } else {
        echo 'Erro ao enviar a mensagem.';
    }

    if (isset ($_POST['submit'])){
    header('Location: index.php');
    }
?>
