<?php
require_once "UserInterface.php";

Class login implements UserInterface{

	public $_email;
	public $_password;
	public $_firstName;
	public $_lastName;
	public $_createdAt;
	public $_updatedAt;
	
	public function __construct($email, $password){
		$this->setEmail($email);
		$this->setPassword($password);
	}
	
	public function setEmail($email){
		$this->_email = $email;
	}
	
	public function getEmail(){
		return $this->_email;
	}
	
	public function setPassword($password){
		$this->_password = $password;
	}	
	
	public function checkPassword(){
		// validate password query	
		if(mysql_num_rows() > 0)
			return $arrUserDetails; // return user details on success validation
		else
			return false;
	}
	
	public function setFirstName($firstName){
		$this->_firstName = $firstName;
	}
	
	public function getFirstName(){
		return $this->_firstName;
	}

	public function setLastName($lastName){
		$this->_lastName = $lastName;
	}

	public function getLastName(){
		return $this->_lastName;
	}	

	public function getId(){
		// fetch user Id
		if(mysql_num_rows() > 0)
			return mysql_fetch_row($query);
		else
			return false;
	}

    public function getCreatedAt(){
		return $this->_createdAt;
	}

    public function setCreatedAt($createdTime){
		$this->_createdAt = $createdTime;
	}

    public function getUpdatedAt(){
		return $this->_updatedAt;
	}

    public function setUpdatedAt($updatedTime){
		$this->_updatedAt = $updatedTime;
	}
	
}
?>
