<?php 

class Sql extends PDO { // Macete: Ela extenderá diretamente de uma classe nativa do php, tudo que o PDO já faz esta classe agora vai fazer

	private $conn;

	public function __construct(){
		$this->conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

	}

	private function setParams($statement, $parameters = array()){

		// foreach dos meus parametros, pegando as chaves e valores
		foreach ($parameters as $key => $value) {

			$this->setParam($key,$value);

		}
	}

	private function setParam($statement, $key, $value){
		$statement->bindParam($key, $value);
	}

	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt ;
		

	}

	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

} 

?>