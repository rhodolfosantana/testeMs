<html>
    <head></head>
    <body>
        <div>
            <link rel="stylesheet" type="text/css" href="../main.css" media="screen" />

            <form method="POST" class="form-horizontal" action="../action/action_addProduct.php" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="control-label col-sm-2" >Nome do Produtos:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nome_produto" placeholder="Nome">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" >Valor:</label>
                    <div class="col-sm-10">
                        <input type="tex" class="form-control" name="valor_produto" placeholder="valor">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" >Imagem:</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="imagem">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default" name="send">Feito!</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>



