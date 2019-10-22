<?php
    include '../action/action_connection.php';
    $id = $_GET['id'];

    $query = $connection->prepare("SELECT * FROM client WHERE id_user = ?");
    $query->bindParam(1, $id);
    $query->execute();

    $dados = $query->fetch();
    $name_user = $dados['name'];
    $age = $dados['age'];

    ?>
<center>
    
    <div >
       <h1> Editar Cliente </h1>
        <div >
            <form method="POST" action="../action/action_updateUsers.php?id=<?=$id?>" enctype="multipart/form-data">
                <div>
                    <label for="text">Nome do Usuário:</label>
                    <input type="text" name="nome_usuario" value="<?php echo $name_user?>">
                </div>

                <div>
                    <label for="text">Idade:</label>
                    <input type="text" name="age" value="<?php echo $age?>">
                </div>
                <div>    
                   <input type="submit" value="Salvar" >
                    <button><a href="../index.php">Voltar</a></button>
                </div>


            </form>
        </div>
    </div>
</center>
