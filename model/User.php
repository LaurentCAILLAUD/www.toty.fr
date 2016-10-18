<?php

class User
{

    /* Properties declaration */
    protected $userMail;
    protected $userPassword;

    /* Constructor declaration */
    public function __construct($userMail, $userPassword)
    {
        $this->userMail = $userMail;
        $this->userPassword = $userPassword;
    }

    /* Declaration of all getters */
    public function getUserMail()
    {
        return $this->userMail;
    }

    public function getUserPassword()
    {
        return $this->userPassword;
    }
}

