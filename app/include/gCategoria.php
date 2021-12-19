<?php

include "../../config/connMysql.php";

if (isset($_POST['cadCategoria'])) {
    $nome = $_POST['nome'];

    $sql = "INSERT INTO categoria VALUE (null, '{$nome}', 'a')";
    if (mysqli_query($conn, $sql)) {
        $msg = "Categoria Cadastrada com sucesso";
        header("Location: ../index.php?msg=$msg");
    }
} else {
        header("Location: ../index.php");
}