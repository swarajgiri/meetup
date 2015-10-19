<?php
namespace Meetup\Login\Core;

use Meetup\Login\Core\Users\UserInterface;

interface Userlogin implement UserInterface
{

    /**
    * Set first name
    *
    * @param string $firstName
    *
    * @return void
    */
    public function setFirstName($firstName){
        $this->firstname=$firstName;
    }

    /**
     * Set last name
     *
     * @param string $lastName
     *
     * @return void
     */
    public function setLastName($lastName){
        $this->lastname=$lastName;
    }

    /**
     * returns the User FirstName
     *
     * @return  string
     */
    public function getFirstName(){
        return $this->firstName;
    }

    /**
     * returns the User LastName
     *
     * @return  string
     */
    public function getLastName(){
         return $this->lastName;
    }

    /**
     * Set Email
     *
     * @param string $firstName
     *
     * @return void
    */
    public function setEmail($email){
        $this->email=$email;
    }

    /**
     * returns the User Email
     *
     * @return  string
     */
    public function getEmail(){
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
    public function setPassword($password){
        $this->password=$password;

    }

    /**
     * Check if the provided password matches the stored password.
     *
     * @param string $password Text password
     *
     * @return bool Whether the password is correct
     */
    public function checkPassword($password){
             $errors_init = $errors;

            if (strlen($password) < 8) {
                $errors[] = "Password too short!";
            }
            if (!preg_match("#[0-9]+#", $password)) {
                $errors[] = "Password must include at least one number!";
            }
            if (!preg_match("#[a-zA-Z]+#", $password)) {
                $errors[] = "Password must include at least one letter!";
            }

            return ($errors == $errors_init);
    }

    /**
     * returns the User User ID
     *
     * @return  string
     */
    public function getId(){
        return $this->id;
    }

    /**
    * returns the User Created Date
    * @return  date
    */
    public function getCreatedAt(){
        return $this->datetime;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $datetime
     *
     * @return void
     */
    public function setCreatedAt($datetime){
        $this->datetime=$datetime;
    }

    /**
     * returns the User Created Date
     * @return  date
    */
    public function getUpdatedAt(){
        return $this->datetime;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $datetime
     *
     * @return void
     */
    public function setUpdatedAt($datetime){
        $this->datetime=$datetime;
    }

}
