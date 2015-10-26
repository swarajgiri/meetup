
<?php

namespace Meetup\Login\Core;

class User implements UserInterface {

    protected $firstName;
    protected $lastName;
    protected $email;
    protected $createdadte;
    protected $datetime;
    protected $password;
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
     * Get first name
     *
     * @return string
     */
    public function getFirstName() {
        return $this->firstName;
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
     * @param string $email
     *
     * @return void
     */
    public function setEmail($email) {
        $this->email = $email;
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
     * Get the ID of the entity
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }
    /**
     * Set createdAt
     *
     * @param \DateTime $createdadte
     *
     * @return void
     */
    public function setCreatedAt($createdadte) {
        $this->createdadte = $createdadte;
    }
    /**
     * Get createdAt
     *
     * @return \createdadte
     */
    public function getCreatedAt() {
        return $this->createdadte;
    }
    /**
     * Set updatedAt
     *
     * @param \DateTime $datetime
     *
     * @return void
     */
    public function setUpdatedAt($datetime) {
        $this->datetime = $datetime;
    }
    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt() {
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
    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    /**
     * Check if the provided password matches the stored password.
     *
     * @param string $password Text password
     *
     * @return bool Whether the password is correct
     */
    public function checkPassword($password,$dbpassword) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $dbpassword = $this->getPassword();

        if (password_verify($dbpassword, $hash)) {
            return true;  // Success!
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
