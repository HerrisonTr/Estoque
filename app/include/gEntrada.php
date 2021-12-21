<?php

include "../../config/connMysql.php";

if (isset($_POST['cadEntrada'])) {
    $date = date('Y-m-d');
    $time = date('H:i:s');

    $nome = $_POST['nome'];
    $cod = $_POST['cod'];
    $patrimonio = $_POST['patrimonio'];
    $idcategoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $unidade = $_POST['un'];
    $obs = $_POST['obs'];
    $doc = $_FILES['doc'];

    $exp = explode(".", $doc['name']);
    $exp = array_reverse($exp);

    $insertEntrada = "INSERT INTO estoque VALUES ('null',
                                        {$idcategoria},
                                        '{$nome}',
                                        '{$cod}',
                                        '{$patrimonio}',
                                        '{$unidade}',
                                        '{$quantidade}',
                                        '{$obs}',
                                        's')";

    if (mysqli_query($conn, $insertEntrada)) {
        $idEstoque = mysqli_insert_id($conn);
        $diretorio = "../documentos/entrada/";
        $docName = $idEstoque . "_" . $date . "." . $exp[0];

        $insertDoc = "INSERT INTO docestoque VALUES ('null',
                                                    {$idEstoque},
                                                    '{$docName}',
                                                    'entrada',
                                                    '{$date}',
                                                    '{$time}')";

        if (mysqli_query($conn, $insertDoc)) {
            if (move_uploaded_file($doc['tmp_name'], $diretorio . $docName)) {
                $msgDoc = "Arquivo enviado com sucesso";
            } else {
                $msgDoc = "Erro ao enviar o arquivo";
            }
        }
    }
} else {
    header('location: ../index.php');
}