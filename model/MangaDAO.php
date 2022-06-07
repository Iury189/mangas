<?php
  
	require_once '../model/Manga.php';

	class MangaDAO extends Manga {

		protected $tabela = 'manga'; 
		
		public function createManga() {
			try {
				$sql = "INSERT INTO $this->tabela (titulo,editora,volumes,desconto,valor) 
				VALUES (:titulo,:editora,:volumes,:desconto,:valor)";
				$stm = BD::getInstance()->prepare($sql);
				$stm->bindValue(':titulo', $this->getTitulo());
				$stm->bindValue(':editora', $this->getEditora());
				$stm->bindValue(':volumes', $this->getVolumes());
				$stm->bindValue(':desconto', $this->getDesconto());
				$stm->bindValue(':valor', $this->getValor());
				return $stm->execute();
			} catch (PDOException $e) {
				echo "Erro PDO: Houve um erro na inserção.<br>".$e->getMessage();
				die();
			} catch (Exception $e) {
				echo "Erro: Operação de inserção inválida.<br>".$e->getMessage();
				die();
			} 
		}

		public function readAllMangas() {
			try {
				$sql = "SELECT * FROM $this->tabela ORDER BY id_manga";
				$stm = BD::getInstance()->prepare($sql);
				$stm->execute();
				return $stm->fetchAll(PDO::FETCH_ASSOC);
			} catch (PDOException $e) {
				echo "Erro PDO: Houve um erro na listagem.<br>".$e->getMessage();
				die();
			} catch (Exception $e) {
				echo "Erro: Operação de listagem inválida.<br>".$e->getMessage();
				die();
			} 
		}

		public function readManga($id) {
			try {
				$sql = "SELECT * FROM $this->tabela WHERE id_manga = :id_manga";
				$stm = BD::getInstance()->prepare($sql);
				$stm->bindValue(':id_manga', $id);
			    $stm->execute();
			    return $stm->fetch(PDO::FETCH_ASSOC);
			} catch (PDOException $e) {
				echo "Erro PDO: Houve um erro na listagem.<br>" . $e->getMessage();
				die();
			} catch (Exception $e) {
				echo "Erro: Operação de listagem inválida.<br>" . $e->getMessage();
				die();
			} 
		}

		public function updateManga() {
			try {
				$sql = "UPDATE $this->tabela SET titulo = :titulo, editora = :editora, 
				volumes = :volumes, desconto = :desconto, valor = :valor WHERE id_manga = :id_manga";
				$stm = BD::getInstance()->prepare($sql);
				$stm->bindValue(':id_manga', $this->getId());
				$stm->bindValue(':titulo', $this->getTitulo());
				$stm->bindValue(':editora', $this->getEditora());
				$stm->bindValue(':volumes', $this->getVolumes());
				$stm->bindValue(':desconto', $this->getDesconto());
				$stm->bindValue(':valor', $this->getValor());
				return $stm->execute();	
			} catch (PDOException $e) {
				echo "Erro PDO: Houve um erro na atualização.<br>".$e->getMessage();
				die();
			} catch (Exception $e) {
				echo "Erro: Operação de atualização inválida.<br>".$e->getMessage();
				die();
			} 
		}
	
		public function deleteManga() {
			try {
				$sql = "DELETE FROM $this->tabela WHERE id_manga = :id_manga";
				$stm = BD::getInstance()->prepare($sql);
				$stm->bindValue(':id_manga', $this->getId());
				return $stm->execute();
			} catch (PDOException $e) {
				echo "Erro PDO: Houve um erro na exclusão.<br>".$e->getMessage();
				die();
			} catch (Exception $e) {
				echo "Erro: Operação de exclusão inválida.<br>".$e->getMessage();
				die();
			} 
		}
	}
?>