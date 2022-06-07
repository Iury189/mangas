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
	<title> Cadastrar coleção </title>
</head>
<body>
	<div class="container" id="tamanho_container" style="margin-top: 40px;">
		<h4 class="text-center">Cadastrar coleção</h4>
		<small class="form-text text-muted text-center">Todos os campos são obrigatórios</small>
		<br>
		<form method="POST" action="/mangas/controller/create_manga.php">
		    <div class="form-group">
		      <label>Título:</label>
		      <input type="text" class="form-control" id="id_titulo" name="titulo" required maxlength="50" title="Campo para inserir o título do mangá" placeholder="Digite o título do mangá">
		    </div>
		    <div class="form-group">
		      <label>Editora:</label>
		      <select class="custom-select" id="id_editora" name="editora" required 
		      title="Caixa de seleção para escolher a editora">
        			<option selected value="" title="Escolha a editora">Escolha a editora</option>
        			<option value="Astral Comics" title="Astral Comics">Astral Comics</option>
        			<option value="Clamp" title="Clamp">Clamp</option>
        			<option value="Conrad" title="Conrad">Conrad</option>
        			<option value="Darkside Books" title="Darkside Books">Darkside Books</option>
        			<option value="Devir" title="Devir">Devir</option>
        			<option value="JBC" title="JBC">JBC</option>
        			<option value="NewPop" title="NewPop">NewPop</option>
        			<option value="Nova Sampa" title="Nova Sampa">Nova Sampa</option>
        			<option value="Panini" title="Panini">Panini</option>
        			<option value="Pipoca & Nanquim" title="Pipoca & Nanquim">Pipoca & Nanquim</option>
        			<option value="Veneta" title="Veneta">Veneta</option>
        			<option value="Outro" title="Outro">Outro</option>
      			</select>
		    </div>
  			<div class="form-group">
		      <label>Quantidade de volumes: </label>
		      <input type="text" class="form-control" id="id_volumes" name="volumes" required title="Campo para escolher a quantidade de volumes da coleção" placeholder="Digite a quantidade de volumes da coleção" onkeypress="$(this).mask('000', {reverse: true});">
		    </div>
		    <div class="form-group">
		      <label>Desconto obtido:</label>
		      <input type="text" class="form-control" id="id_desconto" name="desconto" required title="Campo para inserir o valor de desconto obtido" onkeypress="$(this).mask('000.00', {reverse: true});" placeholder="Digite o valor de desconto obtido">
		    </div>
		    <div class="form-group">
		      <label>Valor da coleção:</label>
		      <input type="text" class="form-control" id="id_valor" name="valor" required title="Campo para inserir o valor da coleção" placeholder="Digite o valor total da coleção" onkeypress="$(this).mask('000.00', {reverse: true});">
		    </div>
		    <button type="submit" name="btn_cadastrar" class="btn btn-success btn-lg btn-block" title="Cadastrar coleção"><i class="fa-light fa-plus"></i>&nbsp;Cadastrar</button>
	    </form>
	</div>
</body>
</html>