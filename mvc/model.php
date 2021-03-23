<?php

class Model {

	private $pdo = null;
	private $stmt = null;

	function __construct () {
		  $this->pdo = new PDO("mysql:host=localhost;dbname=faq;charset=utf8", "root", "", 
		  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
	}

	function get_faq() {
		$sql = "SELECT * FROM question_answer qa, category c WHERE qa.category = c.id;";
		$this->stmt = $this->pdo->prepare($sql);
		$this->stmt->execute();

		return $this->stmt->fetchAll();
	}

	function insert_faq_row($q, $a, $c) {
		$sql = "INSERT INTO question_answer(question, answer, category) VALUES (:q, :a, :c);";
		$this->stmt = $this->pdo->prepare($sql);
		$this->stmt->bindParam(":q", $q);
		$this->stmt->bindParam(":a", $a);
		$this->stmt->bindParam(":c", $c);
		$this->stmt->execute();
	}

	function get_categories() {
		$sql = "SELECT * FROM category"; {
		$this->stmt = $this->pdo->prepare($sql);
		$this->stmt->execute();

		return $this->stmt->fetchAll();	
		}
	}
}
?>