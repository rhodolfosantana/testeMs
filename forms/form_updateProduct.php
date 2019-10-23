<?php
    include '../action/action_connection.php';
    if($_SESSION['logado'] != true){
        header("Location: ../forms/form_login.php");
    }   
    $id = $_GET['id'];

    $query = $connection->prepare("SELECT * FROM product WHERE id_product = ?");
    $query->bindParam(1, $id);
    $query->execute();

    $dados = $query->fetch();
    $name_product = $dados['name_product'];
?>
<center>
    <div >
       <h1> Editar Produto </h1>
        <div >
            <form method="POST" action="../action/action_updateProduct.php?id=<?=$id?>" enctype="multipart/form-data">
                <div>
                    <label for="text">Produto:</label>
                    <input type="text" name="nome_produto" value="<?php echo $name_product?>">
                </div>
                <div>    
                   <input type="submit" value="Salvar" >
                    <button><a href="index.php">Voltar</a></button>
                </div>
            </form>
        </div>
    </div>
</center>
