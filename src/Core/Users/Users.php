<?php

namespace Meetup\Login\Core;

use Meetup\Login\Core\Users\UserInterface;

class User implements UserInterface
{
	protected $firstName;
	protected $lastName;
	protected $password;
	protected $email;
	protected $createdAt;
	protected $datetime;
	protected $updatedAt;
	protected $id;
	
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
		return $this->id;
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
