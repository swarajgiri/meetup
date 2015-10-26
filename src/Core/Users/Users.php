<?php

namespace Meetup\Login\Core;

class Users implements UserInterface
{
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $createddatetime;
    protected $updatedatetime;
    protected $password;

    /**
     * Set first name
     *
     * @param string $firstName
     *
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
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
        $this->lastName = $lastName;
    }

    /**
     * Get first name
     *
     * @return string
     */
    public function getFirstName()
    {
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
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the ID of the entity
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createddatetime
     *
     * @return void
     */
    public function setCreatedAt($createddatetime)
    {
        $this->createddatetime = $createddatetime;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createddatetime;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedatetime
     *
     * @return void
     */
    public function setUpdatedAt($updatedatetime)
    {
        $this->updatedatetime = $updatedatetime;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedatetime;
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
        $this->password=password_hash($password, PASSWORD_DEFAULT);
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
        $hash=password_hash($password, PASSWORD_DEFAULT);

        $storedPassword = $this->getPassword();

        if(password_verify($storedPassword, $hash))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Get user password
     *
     * @return  \Password
     */
    public function getPassword()
    {
        return $this->password;
    }
}

