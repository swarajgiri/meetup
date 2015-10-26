<?php

namespace Meetup\Login\Core;

use Meetup\Login\Core\Users\UserInterface;

class User implements UserInterface
{
	public $userName;
	public $password;
	public $email;
	public $createdAt;
	public $datetime;
	public $firstName;
	public $lastName;

	
	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function checkPassword($password)
	{
		if($password == $this->password){
			return true;
		}

		return false;
	}	

	public function getId()
	{
		$userName = mysqli_real_escape_string($this->userName);
		$query = "SELECT userId FROM user where username = '{$userName}' and email = '{$email}'";
		$result = mysqli_query($query);
		if(mysqli_num_rows()>0){
			$row=mysqli_fetch_assoc($result);
			return $row['userId'];
		}

		return false;
	}

	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	public function setCreatedAt($datetime)
	{
		$this->createdAt = $datetime;
	}

	public function getUpdatedAt()
	{
		return $this->updatedAt;
	}

	public function setUpdatedAt($datetime)
	{
		$this->updatedAt = $datetime;
	}

	public function setFirstName($firstName)
	{
		$this->firtName = $firtName;
	}

	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}

	public function getFirstName()
	{
		return $this->firstName;
	}

	public function getLastName()
	{
		return $this->lastName;
	}

}
