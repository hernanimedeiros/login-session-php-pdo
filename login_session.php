<?php
  session_start();
  if(!isset($_SESSION['autentication']) || $_SESSION['autentication'] != 'true'){
    header('Location: login_input.php?login=erro_session');
  }
?>