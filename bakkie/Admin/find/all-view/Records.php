<?php
class Records {	
   
	private $recordsTable = 'users';
	public $id;
	public $nickname;
    public $name;
    public $surname;
    public $email;
	public $cellnumber;
	public $regdate;
	public $daily_rate;
	public $free_rate;
	public $hoc_rate;
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function listRecords(){
		
		$sqlQuery = "SELECT * FROM ".$this->recordsTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR username LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR surname LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR email LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR cellnumber LIKE "%'.$_POST["search"]["value"].'%") ';			
		}
		
		if(!empty($_POST["order"])){
			$sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
		} else {
			$sqlQuery .= 'ORDER BY id DESC ';
		}
		
		if($_POST["length"] != -1){
			$sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->recordsTable." WHERE approve IS NOT NULL ORDER BY id desc");
		// $stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->recordsTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 				
			$rows = array();			
			$rows[] = $record['id'];
			$rows[] = $record['nickname'];
			$rows[] = ucfirst($record['username']);
			$rows[] = $record['surname'];		
			$rows[] = $record['email'];	
			$rows[] = $record['cellnumber'];
			$rows[] = $record['timeStamp'];
			$rows[] = $record['daily_rate'];
			$rows[] = $record['free_km'];
			$rows[] = $record['hoc_rate'];
			$rows[] = '<button type="button" name="delete" id="'.$record["id"].'" class="btn btn-danger btn-xs delete" >Delete</button>';				
			$records[] = $rows;
		}
		
		$output = array(
			"draw"	=>	intval($_POST["draw"]),			
			"iTotalRecords"	=> 	$displayRecords,
			"iTotalDisplayRecords"	=>  $allRecords,
			"data"	=> 	$records
		);
		
		echo json_encode($output);
	}
	
	// public function getRecord(){
	// 	if($this->id) {
	// 		$sqlQuery = "
	// 			SELECT * FROM ".$this->recordsTable." 
	// 			WHERE id = ?";			
	// 		$stmt = $this->conn->prepare($sqlQuery);
	// 		$stmt->bind_param("i", $this->id);	
	// 		$stmt->execute();
	// 		$result = $stmt->get_result();
	// 		$record = $result->fetch_assoc();
	// 		echo json_encode($record);
	// 	}
	// }
	
	public function deleteRecord(){
		if($this->id) {			

			$stmt = $this->conn->prepare("
				DELETE FROM ".$this->recordsTable." 
				WHERE id = ?");

			$this->id = htmlspecialchars(strip_tags($this->id));

			$stmt->bind_param("i", $this->id);

			if($stmt->execute()){
				return true;
			}
		}
	}
}
?>