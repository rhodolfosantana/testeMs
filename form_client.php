<?php
    include  "action_connection.php";
?>
<html>
    <head></head>
    <body>
        <div>
            <link rel="stylesheet" type="text/css" href="main.css" media="screen" />

            <form method="POST" class="form-horizontal" action="action_addClient.php">
                <div class="form-group">
                    <label class="control-label col-sm-2" >Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nome_usuario" placeholder="Nome">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Idade:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="age" placeholder="Idade">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Feito!</button>
                    </div>
                </div>
            </form>

        </div>

    </body>
</html>



