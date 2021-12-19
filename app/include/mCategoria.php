<div class="modal fade" id="modalCategoria" tabindex="-1" aria-labelledby="modalCategoria" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-inline justify-content-between form-mCategoria" action="include/gCategoria.php" method="POST"> 
                    <label class="form-label col-md-2" for="nome"> Categoria </label>
                    <input class="form-control col-md-6" name="nome" id="nome" type="text" placeholder="Digite o nome da categoria">  
                    <button  type="submit" name="cadCategoria" class="btn btn-outline-success my-btn" id="btn_gCategoria"> Cadastrar </button>
                </form> 
                <div> 
                    <table class="table table-striped table-mCategoria">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $selectCat = "SELECT * FROM categoria";
                            $resultCat = mysqli_query($conn, $selectCat);
                            while ($rowCat = mysqli_fetch_array($resultCat)) {
                                ?>
                                <tr>
                                    <td> <?= $rowCat[0] ?> </td>
                                    <td> <?= $rowCat[1] ?> </td>
                                    <td> <?php if($rowCat[2] == 'a') { echo "Ativo";} else { echo "Inativo";}?> </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>