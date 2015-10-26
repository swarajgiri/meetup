<?php
namespace Meetup\Login\Core;
class User implements UserInterface {
    protected $firstName;
    protected $lastName;
    protected $emailid;
    protected $created;
    protected $datetime;
    protected $passwd;
    /**
     * Set first name
     *
     * @param string $firstName
     *
     * @return void
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }
	 /**
     * Get first name
     *
     * @return string
     */
    public function getFirstName() {
        return $this->firstName;
    }
    /**
     * Set last name
     *
     * @param string $lastName
     *
     * @return void
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }
     /**
     * Get last name
     *
     * @return string
     */
    public function getLastName() {
        return $this->lastName;
    }
    /**
     * Set email
     *
     * @param string $emailid
     *
     * @return void
     */
    public function setEmail($emailid) {
        $this->email = $emailid;
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
     * Get the ID 
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }
    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return void
     */
    public function setCreated($created) {
        $this->created = $created;
    }
    /**
     * Get created
     *
     * @return \created
     */
    public function getCreated() {
        return $this->created;
    }
    /**
     * Set updated
     *
     * @param \DateTime $datetime
     *
     * @return void
     */
    public function setUpdated($datetime) {
        $this->datetime = $datetime;
    }
    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated() {
        return $this->datetime;
    }
    /**
     * Set Password.
     *
     * The password set here is hashed.
     *
     * @param string $passwd Password
     *
     * @return void
     */
    public function setPassword($passwd) {
        $this->password = password_hash($passwd, PASSWORD_BCRYPT);
    }
    /**
     * Check if the provided password matches the stored password.
     *
     * @param string $password Text password
     *
     * @return bool Whether the password is correct
     */
    public function checkPassword($passwd,$dbpasswd) {
        $hash = password_hash($passwd, PASSWORD_BCRYPT);
        $dbpasswd = $this->getPassword();
        if (password_verify($dbpasswd, $hash)) {
            return true;  
        }
    }
    /**
     * get Password
     *
     * @return  string
     */
    public function getPassword() {
        return $this->password;
    }
}