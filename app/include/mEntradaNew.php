<div class="modal fade" id="modalEntrada" tabindex="-1" aria-labelledby="modalEntrada" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entrada</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <form id="form-entrada" enctype='multipart/form-data' action="include/gEntrada.php" method="POST">  
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cod">Cod.</label>
                            <input type="text" name="cod" class="form-control" id="cod">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="patrimonio">Patrimônio</label>
                            <input type="text" name="patrimonio" class="form-control" id="patrimonio">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputState">Categoria</label>
                            <select class="form-control col-md-12" name="categoria">
                                <option> Selecione a categoria </option>
                                <?php
                                $selectCatAtiva = "SELECT * FROM categoria WHERE status = 'a'";
                                $resultCatAtiva = mysqli_query($conn, $selectCatAtiva);
                                while ($rowCatAtiva = mysqli_fetch_array($resultCatAtiva)) {
                                    echo "<option value='$rowCatAtiva[0]'> $rowCatAtiva[1] </option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="un">UN</label>
                            <input type="text" name="un" class="form-control" id="un">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="quantidade">Quant.</label>
                            <input type="number" name="quantidade" class="form-control" id="quantidade">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="obs">obs</label>
                            <input type="text" name="obs" class="form-control" id="obs">
                        </div>
                        <label> Doc. </label>
                        <div class="custom-file">
                            <input type="file" name="doc" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <button type="submit" form="form-entrada" name="cadEntrada" class="btn btn-success">Cadastrar</button>
            </div>
        </div>
    </div>
