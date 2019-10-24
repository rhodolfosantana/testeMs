<?php
    include 'action/action_connection.php';
    if($_SESSION['logado'] != true){
        header("Location: forms/form_login.php");
    }
    $name_user = $_SESSION['user'][1];
    $id_user = $_SESSION['user'][0];
            
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <button><a href="action/action_logout.php" style="text-decoration:none; color:inherit">Deslogar</a></button>

        <center>
            <h1 id="titulo_cadastro"> Olá, <?=$name_user;?>! </h1>
                <div>
                    <form action="action/action_search.php" method="POST">     
                        <input type="search" name="search"  placeholder="Pesquise um usuário..." autocomplete="off">
                        <button type="submit" >Pesquisar</button><br/><br/>
                    </form> 
                </div>
            <div>
                <?php 
                    require "action/action_connection.php";
                    $sql     = 'SELECT * FROM client';
                    $stmt = $connection->prepare($sql);
                    $result = $stmt->execute();
                    
                    ?>
            <div>
                <h1 id="titulo_cadastro"> Produtos</h1>
                <?php 
                    require "action/action_connection.php";
                    $sql     = 'SELECT * FROM product';
                    $stmt = $connection->prepare($sql);

                    $result = $stmt->execute();
                    $colors = $stmt->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <table style="margin-right:50px">
                    <tr>
                        <th>Imagem</th>
                        <th>Nome do Produto</th>
                        <th>Valor</th>
                    </tr>
                <?php foreach($colors as $color): ?>
                    <tr>
                        <td><img src="upload/<?=$color['image']; ?>"class="card-img-top" style="max-height: 5em;" ></td>
                    <td><?php echo $color['name_product']; ?></td>
                    <td><?php echo "R$ ".$color['valor']; ?></td>

                    <!--<td><a href="forms/form_request.php?id=<?=$color['id_product']?>" style="text-decoration:none">Eu quero</a></td>-->
                    </tr>
                <?php endforeach; ?>
            </div>
        </center>
        <!--<button><a href="forms/form_product.php" style="text-decoration:none; color:inherit">Cadastrar</a></button>-->
        

    </body>
</html>