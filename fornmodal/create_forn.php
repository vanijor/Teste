<div class="modal fade" id="create_forn"  role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">

    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Criar Fornecedor</h4>
    </div>
<!-- CRIAÇAO DE USUARIO -->
        <div class="modal-body">

        <form name="formFornecedor" id="formFornecedor" method='post'>
            <div class="row Pessoa">
                <div class="col-md-6">

                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                        placeholder="Nome" 
                        name="Nome"
                        required/>
                    </div>

                    <div class="form-group">
                        <input type="text" 
                        class="form-control input-lg" 
                        placeholder="CNPJ"
                        name="CNPJ" 
                        required/>
                    </div>

                    <div class="form-group">
                        <input type="text" 
                        class="form-control input-lg" 
                        placeholder="Endereco" 
                        name="Endereco"/>
                    </div>

                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                        placeholder="Telefone"
                        name="Telefone" />
                    </div>

                    <div class="form-group">
                        <input type="text"
                        class="form-control input-lg"
                         placeholder="Email"
                         name="Email" />
                    </div>

                    <button type="submit" name="CreateForn" class="btn btn-success btn-lg btn-block" value="CreateForn"><span class="glyphicon glyphicon-ok"></span> Criar </button>
                </div>
            </div>

            <?php
            include("cadastrar.php");
            ?>

        </form>
        </div>
    </div>
    </div>
</div>