<!DOCTYPE html>
<html lang="utf-8">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/mangas/css/bootstrap.css">
	<link rel="stylesheet" href="/mangas/css/css.css">
	<script type="text/javascript" href="/mangas/js/bootstrap.js"></script>
	<script src="https://kit.fontawesome.com/9326dfce3d.js" crossorigin="anonymous"></script>
	<title> Listar coleções </title>
</head>
<body>
	<?php
		require_once "../model/MangaDAO.php";
		$sql_desconto_total = "SELECT SUM(desconto) FROM manga";
		$sql_valor_total = "SELECT SUM(valor) FROM manga";

		$seleciona_desconto = BD::getInstance()->prepare($sql_desconto_total);
		$seleciona_valor =  BD::getInstance()->prepare($sql_valor_total);
		$seleciona_desconto->execute();
		$seleciona_valor->execute();
	    $linha_desconto = $seleciona_desconto->fetchColumn();
		$linha_valor = $seleciona_valor->fetchColumn();
	?>
	<div class="container" style="margin-top: 40px;">
		<h4 class="text-center">Lista de mangás</h4>
		<small class="form-text text-muted text-center">Todos os mangás cadastrados são listados aqui</small>
		<br>
		<nav class="navbar navbar-light" id="barra_navegacao">
		  <a href="/mangas/view/form_create_manga.php" class="btn btn-success" title="Cadastrar mangás"><i class="fa-light fa-plus"></i>&nbsp;Cadastrar</a>
		</nav>
		<table class="table table-hover" id="tabela">
			<thead>
				<tr>
					<th title="ID">ID</th>
					<th title="Título">Título</th>
					<th title="Editora">Editora</th>
					<th title="Volumes">Volumes</th>
					<th title="Desconto">Desconto</th>
					<th title="Valor da coleção">Valor da coleção</th>
					<th title="Data de cadastro">Data de cadastro</th>
					<th title="Ações">Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require_once "../model/MangaDAO.php";
					$manga = new MangaDAO();
            		foreach ($manga->readAllMangas() as $valor){
                		echo '<tr>';
	                		echo '<td title="'.$valor['id_manga'].'">'.$valor['id_manga'].'</td>';
	                		echo '<td title="'.$valor['titulo'].'">'.$valor['titulo'].'</td>';
	                		echo '<td title="'.$valor['editora'].'">'.$valor['editora'].'</td>';
	                		echo '<td title="'.$valor['volumes'].'">'.$valor['volumes'].'</td>';
	                		echo '<td title="R$'.$valor['desconto'].'">R$'.$valor['desconto'].'</td>';
	                		echo '<td title="R$'.$valor['valor'].'">R$'.$valor['valor'].'</td>';
	                		echo '<td title="'.date('d/m/Y H:i:s', strtotime($valor['data_cadastro'])).'">'.
			 		        date('d/m/Y H:i:s', strtotime($valor['data_cadastro'])).'</td>';
			 		        echo '<td>';
    							echo '<a class="btn btn-info" title="Atualizar '.$valor['titulo'].'"'.'href="/mangas/view/form_update_manga.php?id='.$valor['id_manga'].'"role="button" ><i class="fa fa-edit"></i>&nbsp;Atualizar</a>';
    							echo "&nbsp;";
    							echo '<a class="btn btn-danger" title="Deletar '.$valor['titulo'].'"'.'href="/mangas/controller/delete_manga.php?id='.$valor['id_manga'].'"role="button"><i class="fa fa-trash"></i>&nbsp;Deletar</a>';
    						echo '</td>';  	 		       
                		echo '</tr>'; 
            		}
        		?>
			</tbody>
			<tfoot>
				<tr>
					<th>Total</th>
					<th></th>
					<th></th>
					<th></th>
					<th title>
						<?php
							print_r("R$$linha_desconto");
						?>
					</th>
					<th>
						<?php
							print_r("R$$linha_valor");
						?>
					</th>
					<th> </th>
					<th> </th>
				</tr>
        	</tfoot>
		</table>
	</div>
</body>
</html>