<!DOCTYPE html>
<html lang="utf-8">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/mangas/css/bootstrap.css">
	<link rel="stylesheet" href="/mangas/css/css.css">
	<script type="text/javascript" href="/mangas/js/bootstrap.js"> </script>
	<script src="https://kit.fontawesome.com/9326dfce3d.js" crossorigin="anonymous"></script>
	<title> INSERT | MANGÁS </title>
</head>
<body>
	<?php  

		require_once "../model/MangaDAO.php";

		$manga = new MangaDAO();

		if (isset($_POST['btn_cadastrar']) && isset($_POST['titulo']) && isset($_POST['editora']) && 
			isset($_POST['volumes']) && isset($_POST['desconto']) && isset($_POST['valor'])) {

			$titulo = $_POST['titulo'];
			$editora = $_POST['editora'];
			$volumes = $_POST['volumes'];
			$desconto = $_POST['desconto'];
			$valor = $_POST['valor'];

			$manga->setTitulo($titulo);
            $manga->setEditora($editora);
            $manga->setVolumes($volumes);
            $manga->setDesconto($desconto);
            $manga->setValor($valor);

		} else {
			echo "Erro.";
            echo '<p><a href="../view/form_create_manga.php"><button>Refazer operação</button></a></p>';
            die();
		}

		if ($manga->createManga()) {
            header("location: ../view/form_read_manga.php");
            die();
        } else {
            echo "Erro.";
            echo '<p><a href="../view/form_create_manga.php"><button>Refazer operação</button></a></p>';
            die();
        }
	?>
</body>
</html>