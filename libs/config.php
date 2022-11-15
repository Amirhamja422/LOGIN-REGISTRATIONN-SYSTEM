<?php
 class Database{
 	 public $hostdb ='localhost';
 	 public $userdb ='root';
 	 public $passdb ='';
 	 public $namedb ='dblogreg';
 	 public $pdo;
   
	  // Constructor
	  public function __construct() {
       if(!isset($this->pdo)){
	    try{
	    $link = new PDO('mysql:host='.$this->hostdb.';dbname='.$this->namedb, $this->userdb, $this->passdb);
	    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $link->exec("SET CHARACTER SET utf8");
	    $this->pdo = $link;
		
	// Error handling
	    }catch(PDOException $e){
	      die("Failed to connect to DB: ". $e->getMessage());
	    }
	  }

 }

}

?>