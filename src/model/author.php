
<?php 
require_once("config/bootstrap.php");
require_once(WORKING_PATH."src/model/crudmode.php");

class Author extends Crudmodel{
    // define the class properties

public $id = null;
public $user_id = null;
public $biography = null;
public $created = null;
public $updated = null;
public $ipaddress = null;

public function __construct($data=array()){
if(isset($data['id']))$this->id=int($data['id']);
if(isset($data['biography']))$this->biography=trim(stripslashes(htmlspecialchars(['biography'])));
if(isset($data['user_id']))$this->user_id=int($data['user_id']);
if(isset($data['created']))$this->created=date($data['created'],"Y-m-d");
if(isset($data['updated']))$this->created=date($data['created'],"Y-m-d");
if(isset($data['ipaddress']))$this->ipaddress=int($data['ipaddress']);
}


// define the class properties
public function createAuthor($data= []){
    $this->user_id =$_SESSION['user_id']
    if(isset($data['biography']) && isset($data['created'])){
$result = $this->insert("INSERT INTO author(`biography`,`user_id`,`created`,`updated`,`ipaddress`)VALUES(:biography,:user_id,
:created, :updated,:ipaddress)",["biography"=>$this->biography,"user_id"=>$this->user_id,"created"=>$this->created,
"updated"=>$this->updated,"ipaddress"=>$this->ipadrdess]);
    }
    if($result) return $result;
    else{return false;}
    
}

public function readALLAuthors(){
 $result = $this->select("SELECT* FROM author");
 if($result)return $result;
 else(return false;)
}

public function readAuthor($id){
    $this->id= $id;

   if(isset($id)){
   $result = $this->select("SELECT* FROM author WHERE id=:id",["id"=>$this->id]);
   }
   if($result) restun $result;
   else{return false;}
}
   



public function updateAuthor($id,$data=[]){
    $this->id = $id;

if(isset($id) $ isset($data['biography']) && isset($data['updated'])){
 $result = $this->update("UPDATE author SET biography=:biography, updated=:updated WHERE id=:id*"[
    "biography"=>$this->biography,"update"=>$this->updated, "id"=>$this->id]);
 }
 if($result)return $result;
 else{return false;}
}

    
public function deleteAuthor($id){
    $this->id = $id;
if(isset($id)){
$result = $this->delete("DELETE* FROM author WHERE id =:id",["id"=>$this->id]);
if($result)return $result;
else return false;
}
}

}