<?php
    include '../action/action_connection.php';
    if($_SESSION['logado'] == false){
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
       <h1>Confirma pedido </h1>
        <div >
            <form method="POST" action="../action/action_addRequest.php?id=<?=$id?>" enctype="multipart/form-data">
                <div>
                    <label for="text">Produto:</label>
                    <input type="text" name="nome_produto" value="<?php echo $name_product?>">
                </div>
                <div>    
                   <input type="submit" value="Eu quero!" >
                </div>
            </form>
        </div>
    </div>
</center>
