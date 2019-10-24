<?php
			require "../action/action_connection.php";
			if (isset($_POST["search"])){
				$dado = $_POST["search"];
				$output = '';
				$checking="SELECT * FROM product WHERE name_product LIKE :pesquisa OR valor LIKE :pesquisa;";
				$queryOne = $connection->prepare($checking);
				$queryOne->bindValue(':pesquisa', '%'.$dado.'%');
				$return = $queryOne -> execute();
			
			
				$stmt = $queryOne->fetchAll();
					if ($stmt!=null){
				
				
						for ($i = 0; $i < sizeof($stmt); $i++){
							$id = $stmt[$i]['id'];
							$output .= '<div name="search">';
							$output .= '<h3>'.$stmt[$i]['name_product']." - ". $stmt[$i]['valor'].'</h3>';
							$output .= '</div></a>';
				
						}
					}
					else { 
						$output .= '<div class="container panel panel-default">';
						$output .= '<h3> Nada Encontrado</h3>';
						$output .= '</div>';
			
					}
				echo $output;
			}
		?>
	</div>
</center>