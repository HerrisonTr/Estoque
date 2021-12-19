<div class="modal fade" id="modalEntrada" tabindex="-1" aria-labelledby="modalEntrada" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entrada</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-mCategoria" action="entrada.php" method="GET"> 
                    <h2 style="font-size: 20px;" for="categoria"> Selecione uma categoria</h2>
                    <div class="form-inline justify-content-between"> 
                        <select class="form-control col-md-8" name="categoria">
                            <option> Selecione a categoria </option>
                            <?php
                            $selectCatAtiva = "SELECT * FROM categoria WHERE status = 'a'";
                            $resultCatAtiva = mysqli_query($conn, $selectCatAtiva);
                            while ($rowCatAtiva = mysqli_fetch_array($resultCatAtiva)) {
                                echo "<option value='$rowCatAtiva[0]'> $rowCatAtiva[1] </option>";
                            }
                            ?>
                        </select>
                        <button type="submit" class="btn btn-outline-success my-btn"> Continuar </button>
                    </div>
                </form> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
