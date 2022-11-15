<?php
include 'config.php';
class user {
    public $db;
    function __construct() {
        $this->db = new Database();
    }


  public function userRegistration($data){
	$name = $data['userName'];
	$email = $data['email'];
	$password = md5($data['password']);
	// $email_check = $this->emailCheck($email);


	if($name =='' OR  $email =='' OR $password ==''){
	$msg ="<div class='alert alert-danger'>Error ! <strong>Field must not be empty</strong></div>";
	return $msg;
	}


    $sql = "INSERT INTO `user`(`userName`, `email`, `password`) VALUES (:name,:email,:password)";
    // return $sql;
    $query= $this->db->pdo->prepare($sql);
    $query->bindValue('name',$name);
    $query->bindValue('email',$email);
    $query->bindValue('password',$password);
    $result = $query->execute();
    if($result){
     $msg ="<div class='alert alert-primary'>Sucess ! <strong>Thank you, You have been registred</strong></div>";
     return $msg;
    }else{
        $msg = "Data Not upadted";
        return $msg; 
    }


 



	// if (!filter_var($email, FILTER_VALIDATE_EMAIL)=== false) {
	// $msg ="<div class='alert alert-danger'>Error ! <strong>The emial address is not valid</strong></div>";
	//   return $msg;
	// }

    // if($email_check == true){
    // 	$msg ="<div class='alert alert-danger'>Error ! <strong>The emial address is alreadyt exit</strong></div>";
    // }


    

    // public function emailCheck($email){
    // return $sql ="SELECT email FROM user where emial= :email";
    //  $query= $this->db->pdo->prepare($sql);
    //  $query->bindValue('email',$email);
    //  $query->execute();
    //  if($query->rowCount()>0{
    //     return true;
    //  }else{
    //     return false;
    //  }




    // }
     // if(strlen($user_name)<3){
    	// $msg ="<div class='alert alert-danger'>Error ! <strong>Field must not be empty</strong></div>";
    	// return $msg;
     // }elseif () {
     // 	# code...
     // }



    // $result = $this->getLoginUser($email,$password);
    // if($result){
    //     session:init();
    //     session:set("login",true);
    //     session:set("id",$result->id);
    //     session:set("name",$result->name);
    //     session:set("usersname",$result->usersname);
    //     session:set("loginmsg",$result->"<div class='alert alert-danger'>Error ! <strong>You are logged in</strong></div>");
    //     header("location: index.php")
    // }else{
    //  $msg ="<div class='alert alert-danger'>Error ! <strong>Field must not be empty</strong></div>";  
    //  return $msg;
    // }

}



  public function getLoginUser($email,$password){
        $sql ="SELECT email FROM user where emial= :email AND password =:password LIMIT 1";
        $query= $this->db->pdo->prepare($sql);
        $query->bindValue('email',$email);
        $query->bindValue('password',$password);
        $query->execute();
        $result =$query->fetch(PDO::FETCH_OBJ);
        // if($result){
        //     header("location: signup.php")
        // }else{
        //   header("location: test.php")
  
        // }
      }



}
?>