<?php
	
	require_once '../model/BD.php';
	
	class Manga extends BD {
		
		private $id_manga, $titulo, $editora, $volumes, $desconto, $valor;
		
		public function getId() { return $this->id_manga; }
		public function getTitulo() { return $this->titulo; }
		public function getEditora() { return $this->editora; }
		public function getVolumes() { return $this->volumes; }
		public function getDesconto() { return $this->desconto; }
		public function getValor() { return $this->valor; }
		
		public function setId($id_manga) { $this->id_manga = $id_manga; }
		public function setTitulo($titulo) { $this->titulo = $titulo; }
		public function setEditora($editora) { $this->editora = $editora; }
		public function setVolumes($volumes) { $this->volumes = $volumes; }
		public function setDesconto($desconto) { $this->desconto = $desconto; }
		public function setValor($valor) { $this->valor = $valor; }
	}
?>