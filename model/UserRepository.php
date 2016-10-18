<?php

class UserRepository
{

    /* property declaration */
    protected $dbh;

    /* constructor */
    public function __construct($dbh)
    {
        $this->dbh = $dbh;
    }

    /* Creating a function who is verify if the user exist with his mail and his password */
    public function verifyUserIDs($userMail, $userPassword)
    {
        $stmt = $this->dbh->prepare('SELECT user_mail, user_password FROM users WHERE user_mail = :userMail');
        $stmt->bindParam(':userMail', $userMail);
        $stmt->execute();
        $errorInVerificationOfIDS = $stmt->errorInfo();
        if ($errorInVerificationOfIDS[0] != '0') {
            throw new Exception('A problem is occurred during the verification. Error message: ' . $errorInVerificationOfIDS[2]);
        } else {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (isset($row['user_mail'])) {
                if (password_verify($userPassword, $row['user_password'])) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }
}

