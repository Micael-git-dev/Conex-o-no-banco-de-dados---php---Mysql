<?php
                                                                // Mysql  pra versoes antigas
    $servername = "localhost";                                  // Mysqli para versoes novas (so funciona no Mysql)
    $username = "root";                                         // PDO Objetos de dados php
    $password = "";
    $dbname = "senac";

    // Criar conexao
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // verificar conexao
    if (!$con){
        die("conexao erro na conexao: " . mysqli_connect_erro());
    }
    echo "conectado com sucesso!";

?>