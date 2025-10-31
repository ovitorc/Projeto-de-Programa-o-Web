<?php

    $conexao = mysqli_connect("localhost", "root", "", "pessoasdb");
    if($conexao){
        echo "Conexão estabelecida com sucesso.";
    }
    else{
        echo "Erro ao estabelecer conexão";
    }


?>