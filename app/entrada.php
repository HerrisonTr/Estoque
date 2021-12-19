<!DOCTYPE html>
<?php
include "../config/connMysql.php";
if (isset($_GET['categoria'])) {
    $idcategoria = $_GET['categoria'];
} else {
    header("Location: index.php");
}
?>
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
        <div class="body-entrada"> 
            <?php include "./include/navbar.php" ?>
            <div class="content col-md-8"> 
                <form class="" action="include/gEntrada.php" method="POST">  
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="cod">Cod.</label>
                            <input type="text" name="cod" class="form-control" id="cod">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="patrimonio">Patrimônio</label>
                            <input type="text" name="patrimonio" class="form-control" id="patrimonio">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="un">UN</label>
                            <input type="text" name="un" class="form-control" id="un">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="quantidade">Quant.</label>
                            <input type="number" name="quantidade" class="form-control" id="quantidade">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>

        <!--jquery-->
        <script src="../assets/js/jquery-3.6.0.min.js"></script>    
        <script src="../assets/js/main.js"></script>    
        <!--bootstrap-->   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>    
    </body>
</html>

