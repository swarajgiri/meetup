<?php

namespace Meetup\Login\Core;

use Meetup\Login\Core\Users\UserInterface;


class UserLogin implements UserInterface
{


/**
     * Set first name
     *
     * @param string $firstName
     *
     * @return void
     */


      public function setFirstName($firstName){
           $this->firstName= $firstName;
      }


 /**
     * Set last name
     *
     * @param string $lastName
     *
     * @return void
     */

public function setLastName($lastName)
{

$this->lastName= $lastName;
}
  /**
     * Get first name
     *
     * @return string
     */

       public function getFirstName(){
           return $this->firstName;
       }


  /**
     * Get last name
     *
     * @return string
     */
    public function getLastName()
{

 return $this->lastName;
}


 /**
     * Set email
     *
     * @param string $email
     *
     * @return void
     */
public function setEmail($email){
 $this->email= $email;

}

  /**
     * Get email
     *
     * @return string
     */

public function getEmail(){

return $this->email;

}

 /**
     * Get the ID of the entity
     *
     * @return integer
     */

public function getId() 
{
return $this->id

}
  /**
     * Set createdAt
     *
     * @param \DateTime $datetime
     *
     * @return void
     */
public function setCreatedAt($datetime)
{

 $this->datetime= $datetime;

}


/**
     * Get createdAt
     *
     * @return \DateTime
     */
public function getCreatedAt() 
{
return $this->datetime;

}

/**
     * Set updatedAt
     *
     * @param \DateTime $datetime
     *
     * @return void
     */

public function setUpdatedAt($datetime)
{

 $this->datetime= $datetime;
}
  /**
     * Get updatedAt
     *
     * @return \DateTime
     */
public function getUpdatedAt(){

return $this->datetime;

}

    /**
     * Set Password.
     *
     * The password set here is immediately hashed.
     *
     * @param string $password Password
     *
     * @return void
     */
public function setPassword($password)
{
$this->password= $password;
}


 /**
     * Check if the provided password matches the stored password.
     *
     * @param string $password Text password
     *
     * @return bool Whether the password is correct
     */
public function checkPassword($password)
{
 if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $password)){
return FALSE;

}
       
    else {
return TRUE;
}
}

$object = new UserLogin();
$object->setFirstName("demo");
$object->getFirstName();

$object->setLastName("test");
$object->getLastName();

$object->setEmail("test@impelsys.com");
$object->getEmail();

$object->setPassword("impelsys");
$object->checkPassword("impelsys");




