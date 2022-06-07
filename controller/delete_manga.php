<!DOCTYPE html>
<html lang="utf-8">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/mangas/css/bootstrap.css">
	<link rel="stylesheet" href="/mangas/css/css.css">
	<script type="text/javascript" href="/mangas/js/bootstrap.js"> </script>
	<script src="https://kit.fontawesome.com/9326dfce3d.js" crossorigin="anonymous"></script>
	<title> DELETE | MANGÁS </title>
</head>
<body>
	<?php  

		require_once "../model/MangaDAO.php";

		$manga = new MangaDAO();

		if (isset($_GET['id'])) {

			$id_manga = $_GET['id'];

			$manga->setId($id_manga);
			
		} else {
			echo "Erro.";
            echo '<p><a href="../view/form_read_manga.php"><button>Refazer operação</button></a></p>';
            die();
		}

		if ($manga->deleteManga()) {
            header("location: ../view/form_read_manga.php");
            die();
        } else {
            echo "Erro.";
            echo '<p><a href="../view/form_read_manga.php"><button>Refazer operação</button></a></p>';
            die();
        }
	?>
</body>
</html>