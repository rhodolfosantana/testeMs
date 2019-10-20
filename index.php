
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <center>
            <h1 id="titulo_cadastro"> Clientes </h1>
                <div>
                    <form action="view/view_search.php" method="POST">     
                        <input type="text" name="search"  placeholder="Pesquise um usuário..." autocomplete="off">
                        <button type="submit" >Pesquisar</button><br/><br/>
                    </form> 
                </div>
            <div>
                <?php 
                    require "action_connection.php";
                    $sql     = 'SELECT * FROM client';
                    $stmt = $connection->prepare($sql);
                    $result = $stmt->execute();
                    $colors = $stmt->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <table border="1px">
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>-</th>
                        <th>-</th>
                    </tr>
                    <?php foreach($colors as $color): ?>
                        <tr>
                            <td><?php echo $color['name']; ?></td>
                            <td><?php echo $color['age']; ?></td>
                            <td><a href="form_updateClient.php?id=<?=$color['id_user']?>">Editar</a></td>
                            <td><a href="action_deleteClient.php?id=<?=$color['id_user']?>">Excluir</a><br/></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <br/><br/>
                <button><a href="form_client.php">Cadastrar</a></button>
            <div>
                <h1 id="titulo_cadastro"> Produtos</h1>
                <?php 
                    require "action_connection.php";
                    $sql     = 'SELECT * FROM product';
                    $stmt = $connection->prepare($sql);
                    $result = $stmt->execute();
                    $colors = $stmt->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <table border="1px">
                    <tr>
                        <th>Nome</th>
                        <th>-</th>
                        <th>-</th>
                    </tr>
                <?php foreach($colors as $color): ?>
                    <tr>
                    <td><?php echo $color['name_product']; ?></td>
                    <td><a href="form_updateProduct.php?id=<?=$color['id_product']?>">Editar</a></td>
                    <td><a href="action_deleteProduct.php?id=<?=$color['id_product']?>">Excluir</a><br/></td>
                    </tr>
                <?php endforeach; ?>
            </div>
            <div>
                <button><a href="form_product.php">Cadastrar</a></button>
            </div>
        </center>
    </body>
</html>