<?php
namespace Meetup\Login\Core;

use Meetup\Login\Core\Users\UserInterface;

/**
 * UserData Interface
 *
 * Represents Users entity.
 */
interface UserData extends UserInterface
{

    /**
     * Get first name
     *
     * @return string
     */
    public function getFirstName() {
        return $this->firstname;
    }
    
    /**
     * Set first name
     *
     * @param string $firstName
     *
     * @return void
     */
    public function setFirstName($firstName) {
        $this->firstname=$firstname;
    }
   
   /**
     * Set email
     *
     * @param string $email
     *
     * @return void
     */
    public function setEmail($email) {
        $this->email=$email;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
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
    public function setPassword($password) {
         $this->password=$password;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt() {
         return $this->createdDate;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $datetime
     *
     * @return void
     */
    public function setCreatedAt($datetime) {
        $this->createdDate=$datetime;
    }
}
?>