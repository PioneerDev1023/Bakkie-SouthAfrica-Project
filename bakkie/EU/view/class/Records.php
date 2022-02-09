<?php
class Records {	
	private $recordsTable = 'users';
	public $id;
    public $nickname;
    public $hoc_rate;
    public $free_km;
	public $daily_rate;
	public $rdate;
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function listRecords(){
		$seltown = $_POST['seltown'];
		$sqlQuery = "SELECT * FROM ".$this->recordsTable." WHERE hometown='".$seltown."'";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR nickname LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR hoc_rate LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR free_km LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR timeStamp LIKE "%'.$_POST["search"]["value"].'%") ';			
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
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->recordsTable . " WHERE hometown='" . $seltown . "'");
		
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 		
			// $rows = array();
			// $rows[] = $record['user_photo'];
			// $rows[] = '<img src='.$row['user_photo'].' alt="drvier photo" width="500" height="600">';
			// $rows[] = ucfirst($record['nickname']);
			// $rows[] = $record['province'];
			// $rows[] = $record['hometown'];
			// $rows[] = $record['daily_rate'];		
			// $rows[] = $record['free_km'];	
			// $rows[] = $record['hoc_rate'];								
			// $rows[] = '<button type="button" name="contact" id="'.$record["id"].'" class="btn btn-warning btn-xs contact">Whatsapp</button>';
			// $rows[] = $record['bakkie_photo'];
			// $records[] = $rows;
			
			$rows = array();
			$rows[] = $record['id'];
			$rows[] = ucfirst($record['nickname']);
			$rows[] = $record['daily_rate'];		
			$rows[] = $record['free_km'];	
			$rows[] = $record['hoc_rate'];
			$rows[] = $record['timeStamp'];					
			$rows[] = '<button type="button" name="detail" id="'.$record["id"].'" class="btn btn-primary btn-xs update">Details</button>';
			$rows[] = '<button type="button" name="contact" id="'.$record["id"].'" class="btn btn-warning btn-xs contact">Contact</button>';
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
			SET nickname= ?, hoc_rate = ?, free_km = ?, daily_rate = ?, timeStamp = ?
			WHERE id = ?");
	 
			$this->id = htmlspecialchars(strip_tags($this->id));
			$this->nickname = htmlspecialchars(strip_tags($this->nickname));
			$this->hoc_rate = htmlspecialchars(strip_tags($this->hoc_rate));
			$this->free_km = htmlspecialchars(strip_tags($this->free_km));
			$this->daily_rate = htmlspecialchars(strip_tags($this->daily_rate));
			$this->rdate = htmlspecialchars(strip_tags($this->timeStamp));
			
			
			$stmt->bind_param("sisssi", $this->nickname, $this->hoc_rate, $this->free_km, $this->daily_rate, $this->timeStamp, $this->id);
			
			if($stmt->execute()){
				return true;
			}
			
		}	
	}
	public function addRecord(){
		
		if($this->name) {

			$stmt = $this->conn->prepare("
			INSERT INTO ".$this->recordsTable."(`name`, `age`, `skills`, `address`, `designation`)
			VALUES(?,?,?,?,?)");
		
			$this->name = htmlspecialchars(strip_tags($this->name));
			$this->age = htmlspecialchars(strip_tags($this->age));
			$this->skills = htmlspecialchars(strip_tags($this->skills));
			$this->address = htmlspecialchars(strip_tags($this->address));
			$this->designation = htmlspecialchars(strip_tags($this->designation));
			
			
			$stmt->bind_param("sisss", $this->name, $this->age, $this->skills, $this->address, $this->designation);
			
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