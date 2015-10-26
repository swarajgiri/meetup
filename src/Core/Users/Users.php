<?php

namespace Meetup\Login\Core;

use Meetup\Login\Core\Users\UserInterface;

class User implements UserInterface
{
	public $userName;
	public $password;
	public $email;
	public $createdAt;

	public function __construct($userName, $password)
	{
		
	}
	
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

	}	

	public function getId()
	{
		
	}

	public function getCreatedAt()
	{

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
		return $firstName;
	}

	public function getLastName()
	{

	}

}
