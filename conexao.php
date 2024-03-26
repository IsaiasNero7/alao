<?php

    $sevidor = "localhost";
    $usuario = "root";
    $senha ="";
    $banco = "alao";

    if($conexao = mysqli_connect($sevidor,$usuario,$senha,$banco)){
        //echo"deu certo";
    }
    else{
        //echo"se fudeu";
    }

?>
