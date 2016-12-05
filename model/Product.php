<?php
class Product {

	public $host = "localhost";
	public $user = "root";
	public $pw = "root";
	public $myDb = "meu";

	private $id;
	private $type;
	private $name;
	private $quantity;
	private $price;
	private $business;

	public function setId($id) {
		$this->id = $id;
	}
	
	public function getId() {
		return $this->id;
	}

	public function setType($Type) {
		$this->type = $Type;
	}

	public function getType() {
 		return $this->type;
	}

	public function setName($Name) {
		$this->name = $Name;
	}
	
	public function getName() {
		return $this->name;
	}

	public function setQuantity($Quantity) {
		$this->quantity = $Quantity;
	}

	public function getQuantity() {
		return $this->quantity;
	}
	
	public function setPrice($Price) {
		$this->price = $Price;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setBusiness($Business) {
		$this->business = $Business;
	}
	
	public function getBusiness() {
		return $this->business;
	}
	
	public function save()	{


		$mysqli = new mysqli($this->host, $this->user, $this->pw, $this->myDb);
	
		if ($mysqli->connect_errno) {
 			echo "Erro ao tentar conectar-se ao banco de dados: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		return $mysqli->query("INSERT INTO Product (id, type, name, quantity, price, business) VALUES ('$this->id', '$this->type', '$this->name', '$this->quantity', '$this->price', '$this->business')");
		
	}

	public function listProducts() {

        $mysqli = new mysqli($this->host, $this->user, $this->pw, $this->myDb);

        $sql = "SELECT * FROM Product ORDER BY id";

        $consult = $mysqli->query($sql);

		$products = array();
		$i = 0;
		while($row = $consult->fetch_assoc()) {
   			 $products[$i] = $row;
			 $i =  i + 1;
		}
		$mysqli->close();
		return $products;	

	}

}

