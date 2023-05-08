<?php
    $dados = array(
        "nome" => "João da Silva",
        "email" => "joao.silva@example.com"
    );

    header('Content-Type: application/json');
    echo json_encode($dados);
?>
