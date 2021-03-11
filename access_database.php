<?php
    $db_server = '127.0.0.1';
    $db_port = '3306';
    $db_name = 'algarve_from_sky';
    $db_charset = 'utf8';
    $db_user = 'root';
    $red_pill = '';

    try{
        $connection = new PDO("mysql:host=$db_server;port=$db_port;dbname=$db_name;charset=$db_charset",$db_user,$red_pill);
        $user_name = 'SELECT users.name AS Nome FROM users';
        $user_address = 'SELECT users.address AS Nome FROM users';
        $query_01 = $connection -> query($user_name); // executa query à base de dados
        $show_01 = $query_01 -> fetchAll(); // retorna um array com todos os resultados
        $query_02 = $connection -> query($user_address); // executa query à base de dados
        $show_02 = $query_02 -> fetchAll(); // retorna um array com todos os resultados
        print_r ($show_01); // imprime informação sobre uma variável de forma legível
        print_r ($show_02); // imprime informação sobre uma variável de forma legível


    }catch (PDOException $e) {
        die ("Erro na ligação à base de dados: " . $e->getMessage());
    }

?>
