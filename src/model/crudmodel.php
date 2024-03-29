<?php 

require_once WORKING_DIR_PATH."/config/config.php";

class Crudmodel{

protected $conn =null;

public function __construct(){
try{$this->conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    
} catch(PDOException $e){echo $e->getMessage();
}
}

public function executestatement($query="",$params=[]){
try{
      
$stmt = $this->conn->prepare($query);
if($params) $stmt->execute($params);
else{$stmt->execute();}
return $stmt;
}catch(Exception $e){echo $e->getMessage();
}
}
    


public function insert($query="",$params=[]){
try{
$this->executestatement($query,$params);
$result = $this->conn->lastInsertId();
 return $result;
}catch(Exception $e){echo $e->getMessage();
} 
}


public function select($query="",$params=[]){
try{
$stmt = $this->executestatement($query,$params);
$result = $stmt->fetchAll();
return $result;
}catch(Exception $e){echo $e->getMessage();
}
}

public function update($query="",$params=[] ){
try{
$stmt = $this->executestatement($query,$params);
$result = $stmt->rowCount();
return $result;
}catch(Exception $e){echo $e->getMessage();
}
}

public function delete($query="",$params=[]){
try{
$stmt =  $this->executestatement($query,$params);
$result = $stmt-> rowCount();
return $result;
}catch(Exception $e){echo $e->getMessage();
} 
}

public function getSEOUrl($title){
$title = strtolower($title);
$title = explode(" ",$title);
$title = array_slice($title,0,9);
$title = implode("-", $title);
return $title;
}
}
?>















