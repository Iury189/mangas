<!DOCTYPE html>
<html lang="utf-8">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/mangas/css/bootstrap.css">
	<link rel="stylesheet" href="/mangas/css/css.css">
	<script type="text/javascript" href="/mangas/js/bootstrap.js"> </script>
	<script type="text/javascript" href="/mangas/js/manga-mask.js"> </script>
	<script src="https://kit.fontawesome.com/9326dfce3d.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<title> Atualizar coleção </title>
</head>
<body>
	<?php

		require_once "../model/MangaDAO.php";

		$mangaDAO = new MangaDAO();

		if (isset($_GET['id'])) {
			$dados = $mangaDAO->readManga($_GET['id']);
		} else {
			echo '<p><a href="../view/form_read_manga.php"><button>Retornar listagem</button></a></p>';
			die();
		}
	
	?>
	<div class="container" id="tamanho_container" style="margin-top: 20px;">
		<h4 class="text-center">Atualizar coleção</h4>
		<small class="form-text text-muted text-center">Todos os campos são obrigatórios</small>
		<br>
		<form method="POST" action="/mangas/controller/update_manga.php">
			<div class="form-group">
		      <label>ID:</label>
		      <input type="number" class="form-control" name="id_manga" required title="Campo para escolher o ID do mangá" value="<?php echo $dados['id_manga'] ?>" readonly>
		    </div>
		    <div class="form-group">
		      <label>Título:</label>
		      <input type="text" class="form-control" name="titulo" required maxlength="50" title="Campo para inserir o título do mangá" placeholder="Digite o título do mangá" value="<?php echo $dados['titulo'] ?>">
		    </div>
		    <div class="form-group">
		      <label>Editora:</label>
			    <select class="custom-select" name="editora" required 
			      title="Caixa de seleção para escolher a editora" value="<?php echo $dados['editora'] ?>">
	        		<option value="" <?php if($dados['editora']==''){echo 'selected';}?>>Escolha a editora</option>
        			<option value="Astral Comics" title="Astral Comics" <?php if($dados['editora']=='Astral Comics'){echo 'selected';} ?>>Astral Comics</option>
        			<option value="Clamp" title="Clamp" <?php if($dados['editora']=='Clamp'){echo 'selected';} ?>>Clamp</option>
        			<option value="Conrad" title="Conrad" <?php if($dados['editora']=='Conrad'){echo 'selected';} ?>>Conrad</option>
        			<option value="Darkside Books" title="Darkside Books" <?php if($dados['editora']=='Darkside Books'){echo 'selected';} ?>>Darkside Books</option>
        			<option value="Devir" title="Devir" <?php if($dados['editora']=='Devir'){echo 'selected';} ?>>Devir</option>
        			<option value="JBC" title="JBC" <?php if($dados['editora']=='JBC'){echo 'selected';} ?>>JBC</option>
        			<option value="NewPop" title="NewPop" <?php if($dados['editora']=='NewPop'){echo 'selected';} ?>>NewPop</option>
        			<option value="Nova Sampa" title="Nova Sampa" <?php if($dados['editora']=='Nova Sampa'){echo 'selected';} ?>>Nova Sampa</option>
        			<option value="Panini" title="Panini" <?php if($dados['editora']=='Panini'){echo 'selected';} ?>>Panini</option>
        			<option value="Pipoca & Nanquim" title="Pipoca & Nanquim" <?php if($dados['editora']=='Pipoca & Nanquim'){echo 'selected';} ?>>Pipoca & Nanquim</option>
        			<option value="Veneta" title="Veneta" <?php if($dados['editora']=='Veneta'){echo 'selected';} ?>>Veneta</option>
        			<option value="Outros" title="Outros" <?php if($dados['editora']=='Outros'){echo 'selected';} ?>>Outros</option>
    			</select>
		    </div>
  			<div class="form-group">
		      <label>Quantidade de volumes: </label>
		      <input type="text" class="form-control" name="volumes" required title="Campo para escolher a quantidade de volumes da coleção" placeholder="Digite a quantidade de volumes da coleção" onkeypress="$(this).mask('000', {reverse: true});" value="<?php echo $dados['volumes'] ?>">
		    </div>
		    <div class="form-group">
		      <label>Desconto obtido:</label>
		      <input type="text" class="form-control" name="desconto" required title="Campo para inserir o valor de desconto obtido" onkeypress="$(this).mask('000.00', 
		      {reverse: true});" placeholder="Digite o valor de desconto obtido" 
		      value="<?php echo $dados['desconto'] ?>">
		    </div>
		    <div class="form-group">
		      <label>Valor da coleção:</label>
		      <input type="text" class="form-control" name="valor" required title="Campo para inserir o valor da coleção" placeholder="Digite o valor total da coleção" 
		      value="<?php echo $dados['valor'] ?>" onkeypress="$(this).mask('000.00', {reverse: true});">
		    </div>
		    <button type="submit" name="btn_atualizar" class="btn btn-primary btn-lg btn-block" title="Atualizar coleção"><i class="fa fa-arrows-rotate"></i>&nbsp;Atualizar</button>
	    </form>
	</div>
</body>
</html>