<?php
namespace Meetup\Login\Core;
use Meetup\src\Core\Users\UserInterface
Class User  implements  UserInterface{
private $firstName;  
private $lastName;  
private $createdAt;  
private $updatedAt;  
private $email;  
private $password;  

	public function __construct($email, $password){
		$this->setEmail($email);
		$this->setPassword($password);
	}
	public function setPassword($password){
		$this->password = $password;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function checkPassword(){
		$sql = "SELECT * FROM user WHERE email='".$this->email."' AND password='".md5($this->password)."' ";
		$query = mysql_query($sql);
		if(mysql_num_rows() > 0)
			return mysql_fetch_row($query);
		else
			return false;
	}
	
	public function setFirstName($firstName){
		$this->firstName = $firstName;
	}
	public function getFirstName(){
		return $this->firstName;
	}
	public function setLastName($lastName){
		$this->lastName = $lastName;
	}
	public function getLastName(){
		return $this->lastName;
	}
    public function getCreatedAt(){
		return $this->createdAt;
	}
    public function setCreatedAt($createdTime){
		$this->createdAt = $createdTime;
	}
    public function getUpdatedAt(){
		return $this->updatedAt;
	}
    public function setUpdatedAt($datetime){
		$this->updatedAt = $dateTime;
		$sql = "SELECT id FROM user WHERE $email='".$this->email."' updated_at='".$datetime."' ";
		$query = mysql_query($sql);
	}
	
}
$email 	= $_REQUEST['email'];
$password	= $_REQUEST['password'];
$user = new User($email, $password);
$userDetails = $user->checkPassword();
$user->setFirstName($userDetails['firstName']);
$user->setLastName($userDetails['firstName']);
$user->setCreatedAt($userDetails['createdAt']);
$user->setUpdatedAt(date("Y-m-d H:i:s"));
?>