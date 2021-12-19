<!DOCTYPE html>
<?php include "../config/connMysql.php" ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">-->
        <link rel="stylesheet" href="../assets/css/boostrap4.6/bootstrap.min.css" type="text/css">
        <!--css-->
        <link rel="stylesheet" href="../assets/css/style.css" type="text/css">

        <title>Sistema de estoque</title>
    </head>
    <body>
        <div class="body"> 
            <?php include "./include/navbar.php" ?>
            <div class="content"> 
                <div class="action"> 
                    <div class="row row-action">
                        <button class="btn btn-outline-success my-btn" type="button" data-toggle="modal" data-target="#modalEntrada"> Entrada </button>
                        <button class="btn btn-outline-danger my-btn"> Saida </button>
                        <button class="btn btn-outline-info my-btn"> Estoque </button>
                        <button class="btn btn-outline-primary my-btn" type="button" data-toggle="modal" data-target="#modalCategoria"> Categoria </button>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal para cadastrar e visualizar categoria-->
        <?php include "./include/mCategoria.php" ?>
        <!--Modal para entrada--> 
        <?php // include "./include/mEntrada.php" ?>
        <?php include "./include/mEntradaNew.php" ?>

        <!--jquery-->
        <script src="../assets/js/jquery-3.6.0.min.js"></script>    
        <script src="../assets/js/main.js"></script>    
        <!--bootstrap-->   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>    
        <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>    
    </body>
</html>

